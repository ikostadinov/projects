using UnityEngine;
using System.Collections;
using System.Timers;

public class SpawnBlocks : MonoBehaviour {


	Timer t = new Timer ();
	bool spawned = false;
	bool spawning = false;
	GameObject button;
	// Use this for initialization
	public GameObject[] blocks = new GameObject[54];

	void Start () {
		//GameObject resetButton = GameObject.CreatePrimitive(PrimitiveType.Cylinder);
		//resetButton.AddComponent<Rigidbody>();
		//resetButton.transform.localScale = new Vector3(1.0f, 0.4f, 1.0f);
		//resetButton.transform.position = new Vector3(-4,1,-1);
		//resetButton.renderer.material.color = Color.red;
		button = GameObject.Find("CubeButton");
		//button.rigidbody.freezeRotation = true;
		//button.rigidbody.isKinematic = true;

		//button.renderer.material.color = new Color(0.25f,0.110f,0.20f,0.1f);
		Texture tex = Resources.Load("Textures/sphere") as Texture;
		button.renderer.material.mainTexture = tex;
		button.rigidbody.constraints = RigidbodyConstraints.FreezeAll;
		button.renderer.material.color = new Color(0.25f,0.110f,0.20f,0.1f);
	}
	
	// Update is called once per frame
	void Update () {
		if (Time.time > 1 && !spawning && !spawned){
			StartCoroutine(spawnBlocks());
			spawning = true;
		}
	}

	void FixedUpdate()
	{
		if (spawned && blocks[53] != null)
			foreach (GameObject b in blocks) {
				Vector3 currentVelocity = b.rigidbody.velocity;
				
				if (currentVelocity.y <= 0f) 
					return;
				
				currentVelocity.y = 0f;
				
				b.rigidbody.velocity = currentVelocity;
			}
	}


	public IEnumerator spawnBlocks(){

		float x = 0.0f;
		float y = 1.4f;
		float z = 0.0f;
		bool faceX = true;
		for (int i = 0; i < 18; i++) 
		{
			if (i % 2 == 0)
			{
				faceX = true;
				z = -1.0f;
			}
			else
			{
				faceX = false;
				x = -1.0f;
			}
			for (int j= 0; j < 3; j++)
			{
				GameObject block = GameObject.CreatePrimitive(PrimitiveType.Cube);
				block.AddComponent<Rigidbody>();
				block.collider.material = (PhysicMaterial)Resources.Load("PhysicMaterials/Wood");
				block.rigidbody.collisionDetectionMode = CollisionDetectionMode.Continuous;
				block.rigidbody.collider.material.bounciness = 0.0f;
				block.rigidbody.drag = 1;

				//Material newMat = Resources.Load ("block_texture", typeof(Material)) as Material;
				//block.renderer.material = newMat;

				Texture tex = Resources.Load("Textures/light-wood") as Texture;
				block.renderer.material.mainTexture = tex;
				//block.rigidbody.renderer.material.SetTexture("texturerrrrrr",tex);
				//block.renderer.material.SetTexture("texturerrrrrr",tex);
				//block.rigidbody.collider = BoxCollider;
				//block.rigidbody.collider.material.staticFriction = 0.45f;
				//block.rigidbody.collider.material.dynamicFriction = 0.45f;
				//block.GetComponent<BoxCollider>().size = new Vector3(1.01f,1.01f,1.01f);
				block.transform.rigidbody.mass = 1f;
				//Texture tex = Resources.Load("Textures\\block_texture") as Texture;
				//block.renderer.material.mainTexture = tex;
				block.transform.localScale = new Vector3(1.0f, 0.6f, 3.0f);
				block.transform.position = new Vector3(x, y, z);
				blocks[i*3+j] = block;
				if (faceX)
				{
					block.transform.Rotate(new Vector3(0.0f, 90.0f, 0.0f));
					z += 1.0f;
				}
				else
				{
					x += 1.0f;
				}

			}
			yield return new WaitForSeconds(0.1f);
			x = 0.0f;
			y += 0.6f;
			z = 0.0f;
		}
		spawning = false;
		spawned = true;
	}

	public void ClearBlocks()
	{

			for (int k = 0; k<blocks.Length; k++)
		{
			if(blocks[k]!=null){
				Destroy(blocks[k]);}
		}
		spawned = false;
		//Debug.Log ("proba greshka");
	}

	IEnumerator OnCollisionEnter(Collision collision)
	{ 
		//Debug.Log (collision.transform.name);
		if ((collision.transform.name == "bone3" || collision.transform.name == "bone2" || collision.transform.name == "bone1" || collision.transform.name == "palm") && !spawning && spawned) 
		{
			this.ClearBlocks ();
			yield return new WaitForSeconds(1);
			/*button.rigidbody.detectCollisions = false;
			button.rigidbody.useGravity = false;
			button.transform.position = new Vector3(-4.286259f,3.962753f,-0.1903726f);
			button.transform.rotation = new Quaternion(0,0,0,0);*/
			//this.spawnBlocks();
		}
	}
	
}