<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    
    <style type="text/css">
     
   body {
  background-color: black;
}

      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>


<body>
 <?php
  include 'navbar.php'; ?>
    <div class="container" style="color:black" >
        <h2 class="text-center pt-4">Transfer Money</h2>
         <div class="my-info text-center">
        <h4 style="color: red ">My Bank Balance: ₹<span id="myAccountBalance">200000</span></h4>
        <button class="btn btn-info" data-toggle="modal" data-target="#sendMoney">Send Money</button>
       
        <a class="btn btn-info" href="" data-toggle="modal" data-target="#transactionHistory">Transaction History</a>
    </div>
    
     <div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="z-index:1;background-color:black; opacity: .7;>
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" id="enterName" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@email.com</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-apppend">
                                <span class="input-group-text">₹</span>
                            </div>
                            <input type="text" id="enterAmount" class="form-control" placeholder=" Enter Amount"
                                aria-label="Amount">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="sendMoney()" class="btn btn-success" data-dismiss="modal">Send
                        Money</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal transaction History-->
    <div class="modal fade" id="transactionHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="z-index:1;background-color:cyan; opacity: .7;">
                    <ol id="transaction-history-body">

                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr class="table-info">
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                           
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="table-info">
                        <td class="name1"scope="row"><b>1</b></td>
                        <td  class="name1"><b>Raghu</b></td>
                        <td  class="name1"><b>Raghu@email.com</b></td>
                        <td  class="name1"><b>
                            <p id="RaghuBankBalance">90000</p></b>
                        </td>
                     
                    </tr>
                    <tr class="table-info">
                        <td class="name2"scope="row"><b>2</b></td>
                        <td class="name2"><b>Deepu</b></td>
                        <td class="name2"><b>Deepu@email.com</b></td>
                        <td class="name2"><b>
                            <p id="DeepuBankBalance">69000</p></b>
                        
                    </tr>
                    <tr class="table-info">
                        <td  class="name1"scope="row"><b>3</b></td>
                        <td  class="name1"><b>Bharath</b></td>
                        <td  class="name1"><b>Bharath@email.com</b></td>
                        <td  class="name1"><b>
                            <p id="BharathBankBalance">980070</p></b>
                        </td>
                        
                    </tr>
                    <tr class="table-info">
                        <td class="name2"scope="row"><b>4</b></td>
                        <td class="name2"><b>Rekha Mani</b></td>
                        <td class="name2"><b>Rekha@email.com</b></td>
                        <td class="name2"><b>
                            <p id="RekhaBankBalance">45000</p></b>
                        </td>
                        
                    </tr>
                    <tr class="table-info">
                        <td  class="name1" scope="row"><b>5</b></td>
                        <td  class="name1"><b>Meghana</b></td>
                        <td  class="name1"><b>Meghana@email.com</b></td>
                        <td class="name1"><b>
                            <p id="MeghanaBankBalance">129900</p></b>
                        </td>
                       
                    </tr>
                    <tr class="table-info">
                        <td  class="name2"  scope="row"><b>6</b></td>
                        <td class="name2"><b>Nikhila Indirala</b></td>
                        <td class="name2" ><b>Nikhila@email.com</b></td>
                        <td class="name2" ><b>
                            <p id="NikhilaBankBalance">880000</p></b>
                        </td>
                        
                    </tr>
                    <tr class="table-info">
                        <td class="name1" scope="row"><b>7</b></td>
                        <td  class="name1"><b>Aswini yanamala</b></td>
                        <td  class="name1"><b>Aswini@email.com</b></td>
                        <td  class="name1"><b>
                            <p id="AswiniBankBalance">116000</p></b>
                        </td>
                        
                    </tr>
                    <tr class="table-info">
                        <td class="name2"  scope="row"><b>8</b></td>
                        <td  class="name2"><b>Preethi Ponugoti</b></td>
                        <td  class="name2"><b>Preethi@email.com</b></td>
                        <td class="name2"><b>
                            <p id="PreethiBankBalance">96000</p></b>
                        </td>
                        
                    </tr>
                    <tr class="table-info">
                        <td class="name1" scope="row"><b>9</b></td>
                        <td class="name1"><b>Snigdha amrutha</b></td>
                        <td class="name1"><b>Snigdha@email.com</b></td>
                        <td class="name1"><b>
                            <p id="SnigdhaBankBalance">66000</p></b>
                        </td>
                        
                    </tr>
                    <tr class="table-info">
                        <td  class="name2" scope="row"><b>10</b></td>
                        <td  class="name2"><b>Kavya ponti</b></td>
                        <td  class="name2"><b>Kavya@email.com</b></td>
                        <td class="name2" ><b>
                            <p id="KavyaBankBalance">65000</p></b>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html> 
