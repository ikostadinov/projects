using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.Text;

namespace Tictactoe_contract
{
   [ServiceBehavior(InstanceContextMode = InstanceContextMode.Single, ConcurrencyMode = ConcurrencyMode.Reentrant)]
    public class CTictactoe : ITictactoe
    {
       Action<string> e_Joingame = delegate { };
        List<Player> listOfPlayers = new List<Player>();



        public void MakeMove(string username, int buttonId, string XO)
        {
            foreach (Player p in listOfPlayers)
            {
                if (p.PlayerName != username)
                {
                    p.callback.OnMoveCallback(buttonId, XO);
                }
            }
        }

       

        public void Chat(string username, string message)
        {
            foreach (Player p in listOfPlayers)
            {
                if (p.PlayerName != username)
                {
                    p.callback.OnChatCallback(username,message);
                }
            }
        }

        //public void CountWins(string username,int wins)
        //{
        //    //string info = "";
        //    foreach (Player p in listOfPlayers)
        //    {
               
                
        //            p.callback.WinsCallBack(username, wins);
        //            //info= p.PlayerName + " has " + wins + " wins";
                
                
        //    }
        //    //return info;
        //}

        public string GetName(string playername)
        {
            string name = "Player not connected yet";
            foreach (Player pl in listOfPlayers)
            {
                if (pl.PlayerName != playername)
                {
                    return pl.PlayerName;
                }
                
            }
            return name;
        }

        

        public void AddPlayerToList(string playername)
        {
            Player tempPlayer = new Player(playername);
            tempPlayer.callback = OperationContext.Current.GetCallbackChannel<ITictactoeCallback>();
            listOfPlayers.Add(tempPlayer);
            

            
        }

        public List<Player> GetListOfPlayers()
        {
            return listOfPlayers;
        }


        public void FireJoinGameEvent(string username)
        {
            e_Joingame(username);
        }

        public void SubscribeToGame()
        {
            ITictactoeCallback subscriber = OperationContext.Current.GetCallbackChannel<ITictactoeCallback>();
            e_Joingame += subscriber.onLoggingIn;
        }
    }
}
