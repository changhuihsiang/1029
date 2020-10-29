
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="js/web3.min.js"></script>
</head>
<body>
   
   <div>
   	<?php echo "現在時間" . date(yy/mm/dd); ?>
    <br>    <input type="button" id="add" value="counterAdd">
	<input type="button" id="subtract" value="counterSub">
	<input type="button" id="mpy" value="mpy">
	<input type="button" id="getCounter" value="getCounterVal">
</div>	

<p>

	<span id="message"></span>
</p>

<script>
var abi = [
	{
		"constant": false,
		"inputs": [],
		"name": "add",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "subtract",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getCounter",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
]
        // smart contract address
        var address = '0x91208ae3dd53d3ddbb009a3da330ed4e7cbc513b';

window.addEventListener('load', async () => {
    // 偵測到使用的是新版MetaMask
    if (window.ethereum) {
        window.web3 = new Web3(ethereum);
        try {
            // 請求用戶授權
            await ethereum.enable(); 
            // Acccounts now exposed
			accounts = await web3.eth.getAccounts();
			Contract = await new web3.eth.Contract(abi,address);
			//console.log(accounts[0]);
			//console.log(Contract);
            //web3.eth.sendTransaction({/* ... */});
			
        } catch (error) {
            // User denied account access...
        }
    }
    // 偵測到使用的是舊版MetaMask
    else if (window.web3) {
        window.web3 = new Web3(web3.currentProvider);
        // Acccounts always exposed
		accounts = await web3.eth.getAccounts();
			Contract = await new web3.eth.Contract(abi,address);
        //web3.eth.sendTransaction({/* ... */});
		
    }
    // Non-dapp browsers...
    else {
        console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
		//alert('Non-Ethereum browser detected. You should consider trying MetaMask!');
    }
	
});
async function add(){
			document.getElementById('message').textContent='交易處理中,請稍後';
             Contract.methods.add().send({from:accounts[0]})
            .then(function(data){
                //console.log(data);
				document.getElementById('message').textContent='交易處理結束';
            })
        
        }
		
async function subtract(){
			 document.getElementById('message').textContent='交易處理中，請稍後';
             Contract.methods.subtract().send({from:accounts[0]})
            .then(function(data){
                //console.log(data);
				document.getElementById('message').textContent='交易處理結束';
            })
        
        }
		
async function mpy(){
			 document.getElementById('message').textContent='交易處理中，請稍後';
             Contract.methods.mpy().send({from:accounts[0]})
            .then(function(data){
                //console.log(data);
				document.getElementById('message').textContent='交易處理結束';
            })
        
        }
		
async function getCounter(){
           Contract.methods.getCounter().call()
            .then(function(data){
                //console.log(data);
				document.getElementById('message').textContent=data;
            })
        
        }
        document.getElementById('add').addEventListener('click',add);
		document.getElementById('subtract').addEventListener('click',subtract);
		document.getElementById('mpy').addEventListener('click',mpy);
		document.getElementById('getCounter').addEventListener('click',getCounter);	 
</script>

</body>
</html>