using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.Text;

namespace Tictactoe_contract
{
    
    [ServiceContract (CallbackContract = typeof(ITictactoeCallback))]
    public interface ITictactoe
    {
        [OperationContract]
        void MakeMove(string username, int buttonId, string XO);

        [OperationContract]
        string GetName(string username);

        [OperationContract]
        void AddPlayerToList(string playername);

        [OperationContract(IsOneWay = true)]
        void SubscribeToGame();

        [OperationContract(IsOneWay = true)]
        void FireJoinGameEvent(string username);

        [OperationContract]
        void Chat(string username, string message);

        //[OperationContract]
        //void CountWins(string username, int wins);

    }

    [DataContract]
    public class Player
    {
        [DataMember]
        public string PlayerName { get; set; }
        [DataMember]
        public int PlayerScore { get; set; }

        [DataMember]
        public ITictactoeCallback callback { get; set; }

        public Player(string PlayerName)
        {
            this.PlayerName = PlayerName;
        }
    }

    public interface ITictactoeCallback
    {
        [OperationContract (IsOneWay=true)]
        void onLoggingIn(string username);
        [OperationContract(IsOneWay = true)]
        void OnChatCallback(string username, string message);
        [OperationContract(IsOneWay = true)]
        void OnMoveCallback(int buttonId, string XO);
        //[OperationContract(IsOneWay = true)]
        //void WinsCallBack(string username, int wins);
    }
}
