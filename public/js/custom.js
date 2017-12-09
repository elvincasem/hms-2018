function modulequote(bookingids){
	
	$.ajax({
		url: 'functions/modulequote/'+bookingids,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(data);
			//document.getElementById("bookingids").value = data.bookingids;
			//document.getElementById("bookingdate").value = data.bookingdate;
			//document.getElementById("roomNames").value = data.quoteroomNames;
			//document.getElementById("guests").value = data.guests;

			document.getElementById("bokids").innerHTML = data.bookingids;
			//document.getElementById("qrooms").innerHTML = data.quoteroomNames;
			document.getElementById("bds").innerHTML = data.bookingdate;
			document.getElementById("bids").innerHTML = data.bookingids;
			document.getElementById("gnames").innerHTML = data.gname;
			document.getElementById("outquote").innerHTML = data.quotecheckout;
			document.getElementById("inquote").innerHTML = data.quotecheckin;
			document.getElementById("qsource").innerHTML = data.ressource;
			document.getElementById("receps").innerHTML = data.receptionists;
			document.getElementById("bd").innerHTML = data.bookingdate;
			document.getElementById("rom").innerHTML = data.quoteroomNames;
			document.getElementById("qrate").innerHTML = data.quoterate +"<br>"+ data.quoteamount;
			//document.getElementById("amountpaid").innerHTML = data.amountpaid;
			document.getElementById("qcheck").innerHTML = data.quotecheckin +"<br>"+ data.quotecheckout;
			
			
		}
	});
	
}

function selectcharge(val)
{
 $.ajax({
 type: 'post',
 url: '../../functions/selectcharge',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("camount").innerHTML=response; 
 }
 });
}


function addquote(){
	//alert(instcode);

	var boids = document.getElementById("boids").value;
	var gname = document.getElementById("gname").value;
	var ressource = document.getElementById("ressource").value;
	var rec = document.getElementById("rec").value;
	var booking = document.getElementById("booking").value;
	
	//alert(status);
	
	$.ajax({
		url: "functions/addquote",
		type: 'post',
		data: { bookingids:boids,gname:gname,ressource:ressource,receptionists:rec,bookingdate: booking},
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			//window.location.reload();
			//window.reload(location.href + "#reservationdetails_view.php");
			// window.location.href  "reservationdetails_view";
			window.location.href = "quote/quotedetails/"+data.lastid;
			//window.location.reload();
			//window.location.href = "reservation/quotedetails/"+data.lastid;
		}
	});
}

function savequotedet(){
	//alert(status);
	var bdids = document.getElementById("bdids").value;
	var bookingids = document.getElementById("bookingids").value;
	var cin = document.getElementById("cin").value;
	var out = document.getElementById("out").value;
	var paks = document.getElementById("paks").value;
	var roomss = document.getElementById("roomss").value;
	var good = document.getElementById("good").value;
	var season1 = document.getElementById("season1").value;
	var rate1 = document.getElementById("rate1").value;
	
	
	
	$.ajax({
		url: "../../functions/savequotedet",
		type: 'post',
		data: {bdids:bdids, bookingids:bookingids, quotecheckin:cin,quotecheckout:out,quotepax: paks, quoteroomNames: roomss, quotegood_for: good, quoteseason:season1, quoterate: rate1},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

//start of filter//		
function filter(){  
   
   $(function(){  
      $("#from_date").datepicker();  
      $("#to_date").datepicker();  
   });  
   $('#filter').click(function(){  
      var from_date = $('#from_date').val();  
      var to_date = $('#to_date').val();  
        if(from_date != '' && to_date != '')  
        {  
         $.ajax({  
              url:"functions/filter",
              type:"POST",  
              data:{from_date:from_date, to_date:to_date},  
              success:function(data)  
              {  
				//console.log(response);
                $('#order_table').html(data);  
              }  
         });  
        }  
        else  
        {  
          alert("Please Select Date");  
        }  
   });
 } 
 function bankfilters(){  
   
   $(function(){  
      $("#from_date").datepicker();  
      $("#to_date").datepicker();  
   });  
   $('#filter').click(function(){  
      var from_date = $('#from_date').val();  
      var to_date = $('#to_date').val();  
        if(from_date != '' && to_date != '')  
        {  
         $.ajax({  
              url:"functions/bankfilters",
              type:"POST",  
              data:{from_date:from_date, to_date:to_date},  
              success:function(data)  
              {  
				//console.log(response);
                $('#bank_table').html(data);  
              }  
         });  
        }  
        else  
        {  
          alert("Please Select Date");  
        }  
   });
 } 
 
 
 function cashfilters(){  
   
   $(function(){  
      $("#from_date").datepicker();  
      $("#to_date").datepicker();  
   });  
   $('#filter').click(function(){  
      var from_date = $('#from_date').val();  
      var to_date = $('#to_date').val();  
        if(from_date != '' && to_date != '')  
        {  
         $.ajax({  
              url:"functions/cashfilters",
              type:"POST",  
              data:{from_date:from_date, to_date:to_date},  
              success:function(data)  
              {  
				//console.log(response);
                $('#cash_table').html(data);  
              }  
         });  
        }  
        else  
        {  
          alert("Please Select Date");  
        }  
   });
 }
 function cardfilters(){  
   
   $(function(){  
      $("#from_date").datepicker();  
      $("#to_date").datepicker();  
   });  
   $('#filter').click(function(){  
      var from_date = $('#from_date').val();  
      var to_date = $('#to_date').val();  
        if(from_date != '' && to_date != '')  
        {  
         $.ajax({  
              url:"functions/cardfilters",
              type:"POST",  
              data:{from_date:from_date, to_date:to_date},  
              success:function(data)  
              {  
				//console.log(response);
                $('#card_table').html(data);  
              }  
         });  
        }  
        else  
        {  
          alert("Please Select Date");  
        }  
   });
 }
 
 
 
 
 ////////////////////////////////////////////////end of filter//////////////////////////////////////////////////////
 
	
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: '../../functions/fetch_select',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("roomNamess").innerHTML=response; 
 }
 });
}

function select(val)
{
 $.ajax({
 type: 'post',
 url: '../../functions/select',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("roomss").innerHTML=response; 
 }
 });
}

function chargeselect(val)
{
 $.ajax({
 type: 'post',
 url: '../../functions/chargeselect',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("quoteamount").innerHTML=response; 
  //console.log(response);
 }
 });
}



  

//function filter(){
//alert(name);
//var d = new Date();
//var datepaid = document.getElementById("datepaid").value; 
//alert(d.toDateString()); //current date
//alert(d.getDate()); //day of the month
//alert(d.setDate(24));
//alert(d.toDateString());
//}



function savereservation(){
	//alert(instcode);

	var bookingid = document.getElementById("bookingid").value;
	var guests = document.getElementById("guests").value;
	var reservationsource = document.getElementById("reservationsource").value;
	var receptionist = document.getElementById("receptionist").value;
	var bookingdate = document.getElementById("bookingdate").value;
	
	//alert(status);
	
	$.ajax({
		url: "functions/savereservation",
		type: 'post',
		data: { bookingid:bookingid,guests:guests,reservationsource:reservationsource,receptionist:receptionist,bookingdate: bookingdate},
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			//window.location.reload();
			//window.reload(location.href + "#reservationdetails_view.php");
			// window.location.href  "reservationdetails_view";
			window.location.href = "reservation/details/"+data.lastid;
			

		}
	});
}



function savebookingcharges(){
	//alert(instcode);
	
	//var bcid = document.getElementById("bcid").value;
	var bookingid = document.getElementById("bookingid").value;
	var chargenames = document.getElementById("chargenames").value;
	var amounts = document.getElementById("amounts").value;
	var qtys = document.getElementById("qtys").value;
	
	
	
	$.ajax({
		url: "../../functions/savebookingcharges",
		type: 'post',
		data: {bookingid: bookingid,chargename:chargenames,amount: amounts,qty:qtys},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}


function savequotecharges(){
	//alert(instcode);
	
	//var bcid = document.getElementById("bcid").value;
	var bookingids = document.getElementById("bookingids").value;
	var quotechargename = document.getElementById("quotechargename").value;
	var quoteamounts= document.getElementById("quoteamounts").value;
	var quoteqty = document.getElementById("quoteqty").value;
	
	
	
	$.ajax({
		url: "../../functions/savequotecharges",
		type: 'post',
		data: {bookingids: bookingids,quotechargename:quotechargename,quoteamount: quoteamounts,quoteqty:quoteqty},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}


function saveaddbills(){
	//alert(instcode);
	
	var datepaid = document.getElementById("datepaid").value;
	var name = document.getElementById("name").value;
	var bank = document.getElementById("bank").value;
	var cardtype = document.getElementById("cardtype").value;
	var refno = document.getElementById("refno").value;
	var amount = document.getElementById("amount").value;
	var note = document.getElementById("note").value;
	var modeofpayment = document.getElementById("modeofpayment").value;
	
	
	$.ajax({
		url: "functions/saveaddbills",
		type: 'post',
		data: { datepaid:datepaid,name:name,bank:bank,cardtype: cardtype,refno:refno,amount: amount,note:note,modeofpayment: modeofpayment},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

function saveaddguest(){
	//alert(instcode);
	
	var guestTypes = document.getElementById("guestTypes").value;
	var guestsNames = document.getElementById("guestsNames").value;
	var contactNos = document.getElementById("contactNos").value;
	var eMails = document.getElementById("eMails").value;
	var nationalitys = document.getElementById("nationalitys").value;
	
	
	
	$.ajax({
		url: "functions/saveaddguest",
		type: 'post',
		data: { guestType:guestTypes,guestName:guestsNames,contactNo:contactNos,eMail:eMails,nationality:nationalitys},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

function saveaddroom(){
	//alert(instcode);
	
	var roomName = document.getElementById("roomName").value;
	var building = document.getElementById("building").value;
	
	
	$.ajax({
		url: "functions/saveaddguest",
		type: 'post',
		data: { roomName:roomName,building:building},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

function saveaddrate(){
	//alert(instcode);
	
	var roomName = document.getElementById("roomName").value;
	var goodFor = document.getElementById("goodFor").value;
	var peak = document.getElementById("peak").value;
	var superPeak = document.getElementById("superPeak").value;
	var lowSeason = document.getElementById("lowSeason").value;
	var building = document.getElementById("building").value;
	
	
	
	$.ajax({
		url: "functions/saveaddrate",
		type: 'post',
		data: { roomName:roomName,goodFor:goodFor,peak:peak,superPeak:superPeak,lowSeason:lowSeason,building:building},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}
function saveuseraccount(){
	//alert(instcode);
	
	var user = document.getElementById("user").value;
	var passwd = document.getElementById("passwd").value;
	var names = document.getElementById("names").value;
	var usertypes = document.getElementById("usertypes").value;
	
	
	
	$.ajax({
		url: "functions/saveuseraccount",
		type: 'post',
		data: { username:user,password:passwd,name:names,usertype:usertypes},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}


function deleteuser(userid){
	//alert(accountid);
	
	$.ajax({
                    url: 'functions/deleteuser/'+userid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function deletequotebooking(bdids){
	//alert(accountid);
	
	$.ajax({
                    url: '../../functions/deletequotebooking/'+bdids,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function deletequotecharges(bcids){
	//alert(accountid);
	
	$.ajax({
                    url: '../../functions/deletequotecharges/'+bcids,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}
function deleteguest(guestID){
	//alert(accountid);
	
	$.ajax({
                    url: 'functions/deleteguest/'+guestID,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}
function deletediscount(disid){
	//alert(accountid);
	
	$.ajax({
                    url: 'functions/deletediscount/'+disid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function deleteroom(roomID){
	//alert(accountid);
	
	$.ajax({
                    url: 'functions/deleteroom/'+roomID,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function deleteroomrates(rateID){
	//alert(accountid);
	
	$.ajax({
                    url: 'functions/deleteroomrates/'+rateID,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function quote(bookingids){
	//alert(accountid);
	
	$.ajax({
                    url: 'functions/quote/'+bookingids,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function deletereservation(bookingid){
	//alert(accountid);
	
	//var bookingid = document.getElementById("bookingid").value;
			$.ajax({
                    url: 'functions/deletereservation/'+bookingid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
		
	
}


function deleteaddbooking(bdid){
	//alert(accountid);
	
	$.ajax({
                    url: '../../functions/deleteaddbooking/'+bdid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function deleteaddcharges(bcid){
	//alert(accountid);
	
	$.ajax({
                    url: '../../functions/deleteaddcharges/'+bcid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}
function deletecharges(chargeID){
	//alert(accountid);
	
	$.ajax({
                    url: 'functions/deletecharges/'+chargeID,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}

function updatebooking(bdid){
	//alert(accountid);
	  
	var r = confirm("Are your sure you want to Check In?");
    if (r == true) {
        //alert ("You pressed OK!");
		 var person = prompt("Please enter Administrator Password");
    
		if (person =='superadmin') {
			$.ajax({
                    url: '../../functions/updatebooking/'+bdid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//onsole.log(response);
						location.reload();
						//console.log(response);
                    }
                });
		}else{
			alert("Invalid Password");
		}
		
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
	
}




function updateuseraccount(uid){
	
	$.ajax({
		url: 'functions/updateuseraccount/'+uid,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			document.getElementById("uid").value = data.uid;
			document.getElementById("username").value = data.username;
			document.getElementById("password").value = data.password;
			document.getElementById("name").value = data.name;
			document.getElementById("usertype").value = data.usertype;
			
		}
	});
}


function updateuser(){
 
	var uid = document.getElementById("uid").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var name = document.getElementById("name").value;
	var usertype = document.getElementById("usertype").value;
	

	$.ajax({
		url: "functions/updateuser",
		type: 'post',
		data: {uid:uid, username:username, password:password, name:name, usertype:usertype},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
}
function updateguestprofile(guestID){
	
	$.ajax({
		url: 'functions/updateguestprofile/'+guestID,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			document.getElementById("guestID").value = data.guestID;
			document.getElementById("guestType").value = data.guestType;
			document.getElementById("guestName").value = data.guestName;
			document.getElementById("contactNo").value = data.contactNo;
			document.getElementById("eMail").value = data.eMail;
			document.getElementById("nationality").value = data.nationality;
			
		}
	});
}
function guestupdate(){
 
	var guestID = document.getElementById("guestID").value;
	var guestType = document.getElementById("guestType").value;
	var guestName = document.getElementById("guestName").value;
	var contactNo = document.getElementById("contactNo").value;
	var eMail = document.getElementById("eMail").value;
	var nationality = document.getElementById("nationality").value;
	

	$.ajax({
		url: "functions/guestupdate",
		type: 'post',
		data: {guestID:guestID, guestType:guestType, guestName:guestName, contactNo:contactNo, eMail:eMail, nationality:nationality},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
}

function updateroomrates(rateID){
	
	$.ajax({
		url: 'functions/updateroomrates/'+rateID,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			document.getElementById("rateID").value = data.rateID;
			document.getElementById("roomName").value = data.roomName;
			document.getElementById("goodFor").value = data.goodFor;
			document.getElementById("peak").value = data.peak;
			document.getElementById("superPeak").value = data.superPeak;
			document.getElementById("lowSeason").value = data.lowSeason;
			document.getElementById("building").value = data.building;
			
		}
	});
}
function rateupdate(){
 
	var rateID = document.getElementById("rateID").value;
	var roomName = document.getElementById("roomName").value;
	var goodFor = document.getElementById("goodFor").value;
	var peak = document.getElementById("peak").value;
	var superPeak = document.getElementById("superPeak").value;
	var lowSeason = document.getElementById("lowSeason").value;
	var building = document.getElementById("building").value;
	

	$.ajax({
		url: "functions/rateupdate",
		type: 'post',
		data: {rateID:rateID, roomName:roomName, goodFor:goodFor, peak:peak, superPeak:superPeak, lowSeason:lowSeason, building:building},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
}

function addprofile(){
	//alert(instcode);
	
	var companyname = document.getElementById("companyname").value;
	var address = document.getElementById("address").value;
	var contactnumber = document.getElementById("contactnumber").value;
	var email = document.getElementById("email").value;
	
	
	
	
	$.ajax({
		url: "functions/addprofile",
		type: 'post',
		data: { companyname:companyname,address:address,contactnumber:contactnumber,email:email},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}
function savecash(){
	//alert(instcode);
	var bookingid = document.getElementById("bookingid").value;
	var cmodeofpayment = document.getElementById("cmodeofpayment").value;
	var cashamount = document.getElementById("cashamount").value;
	var cnote = document.getElementById("cnote").value;
	var cdatepaid = document.getElementById("cdatepaid").value;
	
	
	
	
	$.ajax({
		url: "../../functions/savecash",
		type: 'post',
		data: { bookingid:bookingid,modeofpayment:cmodeofpayment,amountpaid:cashamount,note:cnote,datepaid:cdatepaid},
		success: function(response) {
			console.log(response);
			window.location.reload();
		}
	});
}
function addcard(){
	//alert(instcode);
	var bookingid = document.getElementById("bookingid").value;
	var modeofpayment = document.getElementById("modeofpayment").value;
	var name = document.getElementById("name").value;
	var datepaid = document.getElementById("datepaid").value;
	var cardtype = document.getElementById("cardtype").value;
	var bank = document.getElementById("bank").value;
	var refno = document.getElementById("refno").value;
	var cardamount = document.getElementById("cardamount").value;
	var note = document.getElementById("note").value;
	
	
	
	$.ajax({
		url: "../../functions/addcard",
		type: 'post',
		data: { bookingid:bookingid,modeofpayment:modeofpayment,name:name,datepaid:datepaid,cardtype:cardtype,bank:bank,refno:refno,amountpaid:cardamount,note:note},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

function addbank(){
	//alert(instcode);
	var bookingid = document.getElementById("bookingid").value;
	var bankmodeofpayment = document.getElementById("bankmodeofpayment").value;
	var bankname = document.getElementById("bankname").value;
	var bankdatepaid = document.getElementById("bankdatepaid").value;
	var bankbank = document.getElementById("bankbank").value;
	var bankrefno = document.getElementById("bankrefno").value;
	var bankamount = document.getElementById("bankamount").value;
	var banknote = document.getElementById("banknote").value;
	
	
	
	$.ajax({
		url: "../../functions/addbank",
		type: 'post',
		data: { bookingid:bookingid,modeofpayment:bankmodeofpayment,name:bankname,datepaid:bankdatepaid,bank:bankbank,refno:bankrefno,amountpaid:bankamount,note:banknote},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

function adddiscount(){
	//alert(instcode);
	var bookingid = document.getElementById("bookingid").value;
	var discounttype = document.getElementById("discounttype").value;
	var date = document.getElementById("date").value;
	var noofseniorcitizen = document.getElementById("noofseniorcitizen").value;
	var disnote = document.getElementById("disnote").value;
	var billamount = document.getElementById("billamount").value;
	
	
	
	$.ajax({
		url: "../../functions/adddiscount",
		type: 'post',
		data: { bookingid:bookingid,discounttype:discounttype,date:date,noofseniorcitizen:noofseniorcitizen,note:disnote,billamount:billamount},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

function updatecharges(chargeID){
	
	$.ajax({
		url: 'functions/updatecharges/'+chargeID,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			document.getElementById("chargeID").value = data.chargeID;
			document.getElementById("namecharge").value = data.namecharge;
			document.getElementById("charge").value = data.charge;
			
			
		}
	});
}
function updateothercharges(){
 
	var chargeID = document.getElementById("chargeID").value;
	var namecharge = document.getElementById("namecharge").value;
	var charge = document.getElementById("charge").value;

	

	$.ajax({
		url: "functions/updateothercharges",
		type: 'post',
		data: {chargeID:chargeID, namecharge:namecharge, charge:charge},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
}

function deletepayment(paymentid){
	//alert(accountid);
	
	
	
	$.ajax({
                    url: '../../functions/deletepayment/'+paymentid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						//console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
	
	
}
function savebookingdet(){
	//alert(status);
	var bookingid = document.getElementById("bookingid").value;
	var checkedin = document.getElementById("checkedin").value;
	var checkedout = document.getElementById("checkedout").value;
	var paxs = document.getElementById("paxs").value;
	var roomNamess = document.getElementById("roomNamess").value;
	var goodfor = document.getElementById("goodfor").value;
	var seasons = document.getElementById("seasons").value;
	var rates = document.getElementById("rates").value;
	
	
	
	$.ajax({
		url: "../../functions/savebookingdet",
		type: 'post',
		data: {bookingid:bookingid, checkin:checkedin,checkout:checkedout,pax: paxs, roomNames: roomNamess, good_for: goodfor, season:seasons, rate: rates},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}

function savereservationdetails(){
	//alert(instcode);
	var bdid = document.getElementById("bdid").value;
	var bookingid = document.getElementById("bookingid").value;
	var checkin = document.getElementById("checkin").value;
	var checkout = document.getElementById("checkout").value;
	var pax = document.getElementById("pax").value;
	var roomNames = document.getElementById("roomNames").value;
	var gfor = document.getElementById("gfor").value;
	var rate = document.getElementById("rate").value;
	var season = document.getElementById("season").value;
	//var status = document.getElementById("status").value;
	
	
	
	$.ajax({
		url: "../../functions/savereservationdetails",
		type: 'post',
		data: { bdid: bdid, bookingid: bookingid, checkin: checkin, checkout: checkout, pax: pax, roomNames: roomNames, good_for: gfor, rate: rate, season:season},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}
function updatebookingdet(bdids){
	
	$.ajax({
		url: '../../functions/updatebookingdet/'+bdids,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			document.getElementById("bdids").value = data.bdids;
			document.getElementById("bookingids").value = data.bookingids;
			document.getElementById("quotecheckin").value = data.quotecheckin;
			document.getElementById("quotecheckout").value = data.quotecheckout;
			document.getElementById("quotepax").value = data.quotepax;
			document.getElementById("quotegood_for").value = data.quotegood_for;
			document.getElementById("quoteroomNames").value = data.quoteroomNames;
			document.getElementById("quoterate").value = data.quoterate;
			document.getElementById("quoteseason").value = data.quoteseason;
			//document.getElementById("status").value = data.status;
			
			
		}
	});
}
function updatequotedetails(){
	//alert(instcode);
	var bdids = document.getElementById("bdids").value;
	var bookingids = document.getElementById("bookingids").value;
	var quotecheckin = document.getElementById("quotecheckin").value;
	var quotecheckout = document.getElementById("quotecheckout").value;
	var quotepax = document.getElementById("quotepax").value;
	var quoteroomNames = document.getElementById("quoteroomNames").value;
	var quotegood_for = document.getElementById("quotegood_for").value;
	var quoterate = document.getElementById("quoterate").value;
	var quoteseason = document.getElementById("quoteseason").value;
	//var status = document.getElementById("status").value;
	
	
	
	$.ajax({
		url: "../../functions/updatequotedetails",
		type: 'post',
		data: { bdids: bdids, bookingids: bookingids, quotecheckin: quotecheckin, quotecheckout: quotecheckout, quotepax: quotepax, quoteroomNames: quoteroomNames, quotegood_for: quotegood_for, quoterate: quoterate, quoteseason:quoteseason},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}


function updatebookingd(bdid){
	
	$.ajax({
		url: '../../functions/updatebookingd/'+bdid,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(response);
			document.getElementById("bdid").value = data.bdid;
			document.getElementById("bookingid").value = data.bookingid;
			document.getElementById("checkin").value = data.checkin;
			document.getElementById("checkout").value = data.checkout;
			document.getElementById("pax").value = data.pax;
			document.getElementById("roomNames").value = data.roomNames;
			document.getElementById("goodfor").value = data.gfor;
			document.getElementById("rate").value = data.rate;
			document.getElementById("season").value = data.season;
			//document.getElementById("status").value = data.status;
			
			
		}
	});
}

function reservation(bookingid){
	
	$.ajax({
		url: 'functions/reservation/'+bookingid,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(data);
			document.getElementById("bookingid").value = data.bookingid;
			document.getElementById("bookingdate").value = data.bookingdate;
			//document.getElementById("roomNames").value = data.roomNames;
			//document.getElementById("guests").value = data.guests;

			document.getElementById("bid").innerHTML = data.bookingid;
			document.getElementById("bookdate").innerHTML = data.bookingdate;
			document.getElementById("bookid").innerHTML = data.bookingid;
			//document.getElementById("room").innerHTML = data.roomNames;
			document.getElementById("guestsname").innerHTML = data.guests;
			document.getElementById("checkout").innerHTML = data.checkout;
			document.getElementById("checkin").innerHTML = data.checkin;
			document.getElementById("source").innerHTML = data.reservationsource;
			document.getElementById("recep").innerHTML = data.receptionist;
			document.getElementById("bdate").innerHTML = data.bookingdate;
			document.getElementById("roomNames").innerHTML = data.roomNames;
			document.getElementById("rate").innerHTML = data.rate +"<br>"+ data.amount;
			document.getElementById("amountpaid").innerHTML = data.amountpaid;
			document.getElementById("check").innerHTML = data.checkin +"  - <br> "+data.checkout+" <br> "+data.modeofpayment +"<br>"+ data.chargename;
			
			
		}
	});
	
}

//function payment(bookingid){
	
	//$.ajax({
		//url: '../../functions/payment/'+bookingid,
		//type: 'post',
		//success: function(response) {
			//var data = JSON.parse(response);
			//console.log(data);
			//document.getElementById("bookingid").value = data.bookingid;
			//document.getElementById("bookingdate").value = data.bookingdate;
			//document.getElementById("roomNames").value = data.roomNames;
			//document.getElementById("guests").value = data.guests;

			//document.getElementById("bid").innerHTML = data.bookingid;
			//document.getElementById("bookingdate").innerHTML = data.bookingdate;
			//document.getElementById("bodid").innerHTML = data.bookingid;
			//document.getElementById("guests").innerHTML = data.guests;
			//document.getElementById("checkout").innerHTML = data.checkout;
			//document.getElementById("checkin").innerHTML = data.checkin;
			//document.getElementById("source").innerHTML = data.reservationsource;
			//document.getElementById("recep").innerHTML = data.receptionist;
			//document.getElementById("bdate").innerHTML = data.bookingdate;
			//document.getElementById("roomNames").innerHTML = data.roomNames;
			//document.getElementById("rate").innerHTML = data.rate +"<br>"+ data.amount;
			//document.getElementById("amountpaid").innerHTML = data.amountpaid;
			//document.getElementById("check").innerHTML = data.checkin +"  - <br> "+data.checkout+" <br> "+data.modeofpayment +"<br>"+ data.chargename;
			
			
		//}
	//});
	
//}

function management(bookingid){
	
	$.ajax({
		url: 'functions/management/'+bookingid,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(data);
			document.getElementById("bookingid").value = data.bookingid;
			document.getElementById("datepaid").value = data.datepaid;
			document.getElementById("name").value = data.name;
			document.getElementById("bank").value = data.bank;
			document.getElementById("cardtype").value = data.cardtype;
			document.getElementById("refno").value = data.refno;
			document.getElementById("amountpaid").value = data.amountpaid;
			document.getElementById("note").value = data.note;
			document.getElementById("modeofpayment").value = data.modeofpayment;
			document.getElementById("bookingid").innerHTML = data.bookingid;
			document.getElementById("date").innerHTML = data.datepaid;
			document.getElementById("name").innerHTML = data.name;
			document.getElementById("bank").innerHTML = data.bank;
			document.getElementById("cardt").innerHTML = data.cardtype;
			document.getElementById("refno").innerHTML = data.refno;
			document.getElementById("amountpaid").innerHTML = data.amountpaid;
			document.getElementById("note").innerHTML = data.note;
			document.getElementById("modeofp").innerHTML = data.modeofpayment;
		}
	});
	
}

function payment(bookingid){
	
	$.ajax({
		url: '../../functions/payment/'+bookingid,
		type: 'post',
		success: function(response) {
			var data = JSON.parse(response);
			console.log(data);
			document.getElementById("bookingid").value = data.bookingid;
			document.getElementById("datepaid").value = data.datepaid;

			//document.getElementById("bookingid").innerHTML = data.bookingid;
			//document.getElementById("datepaid").innerHTML = data.datepaid;
			//document.getElementById("rate").innerHTML = data.rate;
			//document.getElementById("amountpaid").innerHTML = data.amountpaid;
			//document.getElementById("amount").innerHTML = data.amount;
			//document.getElementById("billamount").innerHTML = data.billamount;
			
			
		}
	});
	
}




function saveothercharge(){
	//alert(instcode);
	var chargeID = document.getElementById("chargeID").value;
	var namecharges = document.getElementById("namecharges").value;
	var charged = document.getElementById("charged").value;
	
	
	
	
	$.ajax({
		url: "functions/saveothercharge",
		type: 'post',
		data: { chargeID:chargeID, namecharge:namecharges, charge:charged},
		success: function(response) {
			//console.log(response);
			window.location.reload();
		}
	});
}














//END OF HOTEL MANAGEMENT SYSTEM//
function saveaccount(){
	//alert(instcode);
	
	var accountname = document.getElementById("accountname").value;
	var email = document.getElementById("email").value;
	var telno = document.getElementById("telno").value;
	var address = document.getElementById("address").value;
	
	
	$.ajax({
		url: "functions/saveaccount",
		type: 'post',
		data: {accountname: accountname, email: email, telno:telno,address:address},
		success: function(response) {
			console.log(response);
			//document.getElementById("userusername").value = "";
			//document.getElementById("userpassword").value = "";
			

			//$('#success-alert').show("slow");
			//$('#success-alert').removeClass("hide");
			//setTimeout(function(){$('#success-alert').hide("slow");},1500);
			window.location.reload();;

			//return "valid";
		}
	});
}

function deleteaccount(accountid){
	//alert(accountid);
	
	var r = confirm("Are your sure you want to delete this Account?");
    if (r == true) {
        //alert ("You pressed OK!");
		 var person = prompt("Please enter Administrator Password");
    
		if (person =='superadmin') {
			$.ajax({
                    url: 'functions/deleteaccount/'+accountid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
		}else{
			alert("Invalid Password");
		}
		
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
	
}

function deletequotebooking(bdids){
	//alert(accountid);
	
	var r = confirm("Are your sure you want to delete this Detail?");
    if (r == true) {
        //alert ("You pressed OK!");
		 var person = prompt("Please enter Administrator Password");
    
		if (person =='superadmin') {
			$.ajax({
                    url: '../../functions/deletequotebooking/'+bdids,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						console.log(response);
						location.reload();
						//console.log(response);
                    }
                });
		}else{
			alert("Invalid Password");
		}
		
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
	
}



function savesinglecontact(){
	//alert(instcode);
	
	var contactname = document.getElementById("contactname").value;
	var email = document.getElementById("email").value;
	var telno = document.getElementById("telno").value;
	var address = document.getElementById("address").value;
	var instcode = document.getElementById("instcode").value;
	var accountid = document.getElementById("accountid").value;
	var position = document.getElementById("position").value;
	var fax = document.getElementById("fax").value;
	var website = document.getElementById("website").value;
	
	//alert(accountid);
	$.ajax({
		url: "functions/savesinglecontact",
		type: 'post',
		data: { instcode:instcode,contactname: contactname, email: email, telno:telno,address:address,accountid:accountid,position:position,fax:fax,website:website},
		success: function(response) {
			console.log(response);
			//document.getElementById("userusername").value = "";
			//document.getElementById("userpassword").value = "";
			

			//$('#success-alert').show("slow");
			//$('#success-alert').removeClass("hide");
			//setTimeout(function(){$('#success-alert').hide("slow");},1500);
			window.location.reload();;

			//return "valid";
		}
	});
}
function deletecontact(contactid){
	//alert(accountid);
	
	var r = confirm("Are your sure you want to delete this contact?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
    
		if (person =='superadmin') {
			$.ajax({
                    url: 'functions/deletecontact/'+contactid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						window.location.reload();
						//console.log(response);
						
						//console.log(response);
                    }
                });
			
		}else{
			alert("Invalid Password");
		}
		
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
	
}


function generatespno(){
	//alert(instcode);
	
	var specialpermit = document.getElementById("specialpermit").value;
	
	
	
	$.ajax({
		url: "functions/generatepermitno",
		type: 'post',
		data: {specialpermit: specialpermit},
		success: function(response) {
			console.log(response);
			
			var lastnumber = parseInt(response);
			//console.log(lastnumber);
			var invalidresponse = response.length;
			if(invalidresponse >4){
				lastnumber=0;
			}
			
			var incrementlastnumber = lastnumber+1;
			var strinc = incrementlastnumber.toString();
		
			if(strinc.length==1){
				var zero ="00";
			}
			if(strinc.length==2){
				var zero ="0";
			}
			if(strinc.length==3){
				var zero ="";
			}
			var displayno = zero+incrementlastnumber;
			document.getElementById("permitno").value = displayno;


		}
	});
}

function savepermits(){
	//alert(instcode);
	
	var instcode = document.getElementById("instcode").value;
	var permitdate = document.getElementById("permitdate").value;
	var programname = document.getElementById("programname").value;
	var specialpermit = document.getElementById("specialpermit").value;
	
	var permitno = document.getElementById("permitno").value;
	var seriesyear = document.getElementById("seriesyear").value;
	var effectivitydate = document.getElementById("effectivitydate").value;
	var programlevel = document.getElementById("programlevel").value;
	
	//alert(accountid);
	$.ajax({
		url: "functions/savepermits",
		type: 'post',
		data: { instcode:instcode,permitdate:permitdate,programname:programname,specialpermit:specialpermit,permitno:permitno,seriesyear:seriesyear,effectivitydate:effectivitydate,programlevel:programlevel},
		success: function(response) {
			console.log(response);
			//document.getElementById("userusername").value = "";
			//document.getElementById("userpassword").value = "";
			

			//$('#success-alert').show("slow");
			//$('#success-alert').removeClass("hide");
			//setTimeout(function(){$('#success-alert').hide("slow");},1500);
			window.location.reload();;

			//return "valid";
		}
	});
}

function editcoordinates(){
	$('#latitude').prop("disabled", false);
	$('#longtitude').prop("disabled", false);
	
}
function savecoordinates(instcode){
	var latitude = document.getElementById("latitude").value;
	var longtitude = document.getElementById("longtitude").value;
	var institutionalcode = instcode;
	//alert(institutionalcode);
	//alert(longtitude);
	$.ajax({
		url: "../../functions/savecoordinates/"+instcode,
		type: 'post',
		data: {instcode:instcode, latitude:latitude,longtitude:longtitude},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
	
	
}

function editinstitution(){
	$('#heitype').prop("disabled", false);
	$('#aprovince2').prop("disabled", false);
	
	
}
function saveheiinformation(instcode){
	//var latitude = document.getElementById("latitude").value;
	var heitype = document.getElementById("heitype").value;
	var province2 = document.getElementById("aprovince2").value;
	//var institutionalcode = instcode;
	//alert(latitude);
	//alert(longtitude);
	$.ajax({
		url: "../../functions/saveheiinfo/"+instcode,
		type: 'post',
		data: {instcode:instcode, heitype:heitype,province2:province2},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
	
	
}
function assignsupervisor(programid){
	
	
	document.getElementById('programid').value=programid;
	//$("#closesupervisor").click();
}
function editprogram(programid){
	
	
	document.getElementById('editprogramid').value=programid;
	//$("#closesupervisor").click();
	$.ajax({
		url: "../../functions/getprograminfo/"+programid,
		type: 'post',
		//data: {instcode:instcode, latitude:latitude,longtitude:longtitude},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			console.log(data);
			document.getElementById('editprogramid').value = data.programid;
			document.getElementById('editprogramname').value = data.mainprogram;
			document.getElementById('editmajor').value = data.major;
			
			var supervisor = document.getElementById("editselectsupervisor");
				//supervisor.remove(0);
				var opt = document.createElement("option");
				opt.value = data.supervisor;
				opt.text = data.supervisor;
				opt.selected = "selected";
				supervisor.add(opt,  supervisor.options[0]);
				
			var discipline = document.getElementById("editselectdiscipline");
				//discipline.remove(0);
				var opt = document.createElement("option");
				opt.value = data.discipline;
				opt.text = data.discipline;
				opt.selected = "selected";
				discipline.add(opt,  discipline.options[0]);
				
			var discipline2 = document.getElementById("editselectdiscipline2");
				//discipline2.remove(0);
				var opt = document.createElement("option");
				opt.value = data.discipline2;
				opt.text = data.discipline2;
				opt.selected = "selected";
				discipline2.add(opt,  discipline2.options[0]);
			
		}
	});
}

function updateprogram(){
	
	//$("#tabinformation").load(location.href + " #tabinformation");
	var programid = document.getElementById('editprogramid').value;
	var supervisor = document.getElementById('editselectsupervisor').value;
	var discipline = document.getElementById('editselectdiscipline').value;
	var discipline2 = document.getElementById('editselectdiscipline2').value;
	
	$.ajax({
		url: "../../functions/updateprogram/"+programid,
		type: 'post',
		data: {supervisor:supervisor,discipline:discipline,discipline2:discipline2},
		success: function(response) {
			console.log(response);
			//window.location.reload();;
		}
	});
	
	
	document.getElementById('supervisorcolumn'+programid).innerHTML=supervisor;
	$("#closesupervisor").click();
	
	
}

function savesupervisorprogram(){
	
	//$("#tabinformation").load(location.href + " #tabinformation");
	var programid = document.getElementById('programid').value;
	var supervisor = document.getElementById('selectsupervisor').value;
	
	$.ajax({
		url: "../../functions/savesupervisorprogram/"+programid,
		type: 'post',
		data: {supervisor:supervisor},
		success: function(response) {
			console.log(response);
			//window.location.reload();;
		}
	});
	
	
	document.getElementById('supervisorcolumn'+programid).innerHTML=supervisor+"<br><button type='submit' class='btn btn-effect-ripple btn-primary'  href='#addsupervisor' data-toggle='modal' onclick='assignsupervisor("+programid+");'><i class='fa fa-user-plus'></i></button>";
	$("#closesupervisor").click();
	
	
}

function savesingleapplicant(){
	//alert(instcode);
	
	var lastname = document.getElementById("lastname").value;
	var firstname = document.getElementById("firstname").value;
	var middlename = document.getElementById("middlename").value;
	var extension = document.getElementById("extension").value;
	var dateofbirth = document.getElementById("dateofbirth").value;
	var placeofbirth = document.getElementById("placeofbirth").value;
	var gender = document.getElementById("gender").value;
	var civilstatus = document.getElementById("civilstatus").value;
	var citizenship = document.getElementById("citizenship").value;
	var contactno = document.getElementById("contactno").value;
	var email = document.getElementById("email").value;
	var barangay = document.getElementById("barangay").value;
	var towncity = document.getElementById("towncity").value;
	var province = document.getElementById("province").value;
	var congressionaldistrict = document.getElementById("congressionaldistrict").value;
	var zipcode = document.getElementById("zipcode").value;
	var heicode = document.getElementById("heicode").value;
	var course = document.getElementById("course").value;
	var father = document.getElementById("father").value;
	var foccupation = document.getElementById("foccupation").value;
	var mother = document.getElementById("mother").value;
	var moccupation = document.getElementById("moccupation").value;
	var siblingno = document.getElementById("siblingno").value;
	var disability = document.getElementById("disability").value;
	var yearofapplication = document.getElementById("yearofapplication").value;
	
	$('#savebutton').prop("disabled", true);
	
	//alert(accountid);
	$.ajax({
		url: "functions/savesingleapplicant",
		type: 'post',
		data: {lastname:lastname,firstname:firstname,middlename:middlename,extension:extension,dateofbirth:dateofbirth,placeofbirth:placeofbirth,gender:gender,civilstatus:civilstatus,citizenship:citizenship,contactno:contactno,email:email,barangay:barangay,towncity:towncity,province:province,congressionaldistrict:congressionaldistrict,zipcode:zipcode,heicode:heicode,course:course,father:father,foccupation:foccupation,mother:mother,moccupation:moccupation,siblingno:siblingno,disability:disability,yearofapplication:yearofapplication},
		success: function(response) {
			console.log(response);
			//document.getElementById("userusername").value = "";
			//document.getElementById("userpassword").value = "";
			

			//$('#success-alert').show("slow");
			//$('#success-alert').removeClass("hide");
			//setTimeout(function(){$('#success-alert').hide("slow");},1500);
			window.location.reload();;

			//return "valid";
		}
	});
}
function deleteapplicant(applicantid){
	//alert(accountid);
	
	var r = confirm("Are your sure you want to delete this applicant?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
    
		if (person =='superadmin') {
			$.ajax({
                    url: 'functions/deleteapplicant/'+applicantid,
                    type: 'post',
                    //data: {accountid: accountid},
                    success: function(response) {
						window.location.reload();
						//console.log(response);
						
						//console.log(response);
                    }
                });
			
		}else{
			alert("Invalid Password");
		}
		
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
	
}

function savepayment(scholarid){
	
	var semester = document.getElementById("semester").value;
	var schoolyear = document.getElementById("schoolyear").value;
	var fundcluster;// = document.getElementById("fundcluster").value;
	var paymentdate = document.getElementById("paymentdate").value;
	var checkno = document.getElementById("checkno").value;
	var amount = document.getElementById("amount").value;
	var remarks = document.getElementById("remarks").value;
	var cy = document.getElementById("cy").value;
	var status = document.getElementById("status").value;
	
	$.ajax({
		url: "../../functions/savepayment/"+scholarid,
		type: 'post',
		data: {semester:semester, schoolyear:schoolyear,checkno:checkno,amount:amount,remarks:remarks,cy:cy,status:status,fundcluster:fundcluster,paymentdate:paymentdate},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
	
	
}
function addpayment(){
	$('#savebutton').prop("disabled", false);    
	$('#updatebutton').prop("disabled", true); 
	document.getElementById('spaymentid').value="";
	document.getElementById('checkno').value = "";
	document.getElementById('amount').value = "";
	document.getElementById('remarks').value = "";
	var status = document.getElementById("status");
				//discipline2.remove(0);
		var opt = document.createElement("option");
		opt.value = "Available";
		opt.text ="Available";
		opt.selected = "selected";
		status.add(opt,  status.options[0]);
}
function editpayment(spaymentid){
	
	//clear fields
	document.getElementById('spaymentid').value="";
	document.getElementById('checkno').value = "";
	document.getElementById('amount').value = "";
	document.getElementById('remarks').value = "";
	//document.getElementById('semester').value = data.checkno;
	//document.getElementById('schoolyear').value = data.amount;
	//document.getElementById('cy').value = data.remarks;
	$('#savebutton').prop("disabled", true);    
	$('#updatebutton').prop("disabled", false);    
	//alert("test");
	
	document.getElementById('spaymentid').value=spaymentid;
	$.ajax({
		url: "../../functions/getpaymentinfo/"+spaymentid,
		type: 'post',
		//data: {instcode:instcode, latitude:latitude,longtitude:longtitude},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			console.log(data);
			var semester = document.getElementById("semester");
				//discipline2.remove(0);
				var opt = document.createElement("option");
				opt.value = data.semester;
				opt.text = data.semester;
				opt.selected = "selected";
				semester.add(opt,  semester.options[0]);
			var schoolyear = document.getElementById("schoolyear");
				//discipline2.remove(0);
				var opt = document.createElement("option");
				opt.value = data.schoolyear;
				opt.text = data.schoolyear;
				opt.selected = "selected";
				schoolyear.add(opt,  schoolyear.options[0]);
			document.getElementById('checkno').value = data.checkno;
			document.getElementById('amount').value = data.amount;
			document.getElementById('remarks').value = data.remarks;
			var cy = document.getElementById("cy");
				//discipline2.remove(0);
				var opt = document.createElement("option");
				opt.value = data.cy;
				opt.text = data.cy;
				opt.selected = "selected";
				cy.add(opt,  cy.options[0]);
			var status = document.getElementById("status");
				//discipline2.remove(0);
				var opt = document.createElement("option");
				opt.value = data.status;
				opt.text = data.status;
				opt.selected = "selected";
				status.add(opt,  status.options[0]);
			/*
			
			document.getElementById('editprogramname').value = data.mainprogram;
			document.getElementById('editmajor').value = data.major;
			
			var supervisor = document.getElementById("editselectsupervisor");
				//supervisor.remove(0);
				var opt = document.createElement("option");
				opt.value = data.supervisor;
				opt.text = data.supervisor;
				opt.selected = "selected";
				supervisor.add(opt,  supervisor.options[0]);
				
			var discipline = document.getElementById("editselectdiscipline");
				//discipline.remove(0);
				var opt = document.createElement("option");
				opt.value = data.discipline;
				opt.text = data.discipline;
				opt.selected = "selected";
				discipline.add(opt,  discipline.options[0]);
				
			*/
			
		}
	});
}
function updatepayment(){
	
	//$("#tabinformation").load(location.href + " #tabinformation");
	var spaymentid = document.getElementById('spaymentid').value;
	var semester = document.getElementById("semester").value;
	var schoolyear = document.getElementById("schoolyear").value;
	var checkno = document.getElementById("checkno").value;
	var amount = document.getElementById("amount").value;
	var remarks = document.getElementById("remarks").value;
	var cy = document.getElementById("cy").value;
	var status = document.getElementById("status").value;
	
	$.ajax({
		url: "../../functions/updatepayment/"+spaymentid,
		type: 'post',
		data: {semester:semester, schoolyear:schoolyear,checkno:checkno,amount:amount,remarks:remarks,cy:cy,status:status},
		success: function(response) {
			console.log(response);
			window.location.reload();;
		}
	});
	
	
	//document.getElementById('supervisorcolumn'+programid).innerHTML=supervisor;
	//$("#closesupervisor").click();
	
	
}

function startwidget(){
	var widgetChartPie      = $('#widget-chart-pie');
	var stronglyagree = document.getElementById("stronglyagree").value;
	var agree = document.getElementById("agree").value;
	// Pie Chart
            $.plot(widgetChartPie,
                [
                    {label: 'Strongly Agree', data: stronglyagree},
                    {label: 'Agree', data: agree}
                ],
                {
                    colors: ['#5cafde', '#5ccdde'],
                    legend: {show: false},
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            label: {
                                show: true,
                                radius: 2/3,
                                formatter: function(label, pieSeries) {
                                    return '<div class="chart-pie-label">' + label + '<br>' + Math.round(pieSeries.percent) + '%</div>';
                                },
                                background: {opacity: .75, color: '#000000'}
                            }
                        }
                    }
                }
            );
			
		
		var widgetChartPie2      = $('#widget-chart-pie2');
	var stronglyagree2 = document.getElementById("cstronglyagree").value;
	var agree2 = document.getElementById("cagree").value;
	// Pie Chart
            $.plot(widgetChartPie2,
                [
                    {label: 'Strongly Agree', data: stronglyagree2},
                    {label: 'Agree', data: agree2}
                ],
                {
                    colors: ['#afde5c','#454e59'],
                    legend: {show: false},
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            label: {
                                show: true,
                                radius: 2/3,
                                formatter: function(label, pieSeries) {
                                    return '<div class="chart-pie-label">' + label + '<br>' + Math.round(pieSeries.percent) + '%</div>';
                                },
                                background: {opacity: .75, color: '#000000'}
                            }
                        }
                    }
                }
            );
			
	
}

function savevoucher(scholarid){
	//alert($('#savevoucherbutton').prop("disabled"));
	$('#savevoucherbutton').prop("disabled", true);
	$('#updatevoucherbutton').prop("disabled", false);
	
	//alert($('#savevoucherbutton').prop("disabled"));
	//console.log($('#savevoucherbutton').prop("disabled"));
	var fundcluster = document.getElementById("fundcluster").value;
	var voucherdate = document.getElementById("voucherdate").value;
	var dvno = document.getElementById("dvno").value;
	var modeofpayment = document.getElementById("modeofpayment").value;
	var orsno = document.getElementById("orsno").value;
	var vouchersemester = document.getElementById("vouchersemester").value;
	var voucherschoolyear = document.getElementById("voucherschoolyear").value;
	//var particulars = document.getElementById("particulars").value;
	var responsibility = document.getElementById("responsibility").value;
	var mfopap = document.getElementById("mfopap").value;
	var voucheramount = document.getElementById("voucheramount").value;
	
	if(document.getElementById("certifiedcash").checked ==true){
		var certifiedcash = 1;
	}else{
		var certifiedcash = 0;
	}
	
	if(document.getElementById("certifiedsubject").checked ==true){
		var certifiedsubject = 1;
	}else{
		var certifiedsubject = 0;
	}
	
	if(document.getElementById("certifiedsupporting").checked ==true){
		var certifiedsupporting = 1;
	}else{
		var certifiedsupporting = 0;
	}
	//var certifiedcash = document.getElementById("certifiedcash").value;
	//var certifiedsubject = document.getElementById("certifiedsubject").value;
	//var certifiedsupporting = document.getElementById("certifiedsupporting").value;
	
	//alert(certifiedcash);
	
	$.ajax({
		url: "../../functions/savevoucher/"+scholarid,
		type: 'post',
		data: {fundcluster:fundcluster,voucherdate:voucherdate,dvno:dvno,modeofpayment:modeofpayment,orsno:orsno,responsibility:responsibility,mfopap:mfopap,voucheramount:voucheramount,certifiedcash:certifiedcash,certifiedsubject:certifiedsubject,certifiedsupporting:certifiedsupporting,vouchersemester:vouchersemester,voucherschoolyear:voucherschoolyear},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			//setTimeout(function(){document.getElementById("voucherid").value = data.lastid;},1500);
			document.getElementById("voucherid").value = data.lastid;
			console.log(data.lastid);
			//alert(data.lastid);
			document.getElementById("voucherid").value = data.lastid;
			//window.location.reload();;
			
			//$('#general-table').load(document.URL +  '#general-table');
			$('#voucherlist-table').load(document.URL +  ' #voucherlist-table');
			//$( ".close" ).trigger( "click" );
			//$('#modaldiv').load(document.URL +  ' #modaldiv');
		}
	});
	
	
}


function addentry(){
	
	var dvno = document.getElementById("dvno").value;
	var accounttitle = document.getElementById("accounttitle").value;
	var uacscode = document.getElementById("uacscode").value;
	var columnentry = document.getElementById("columnentry").value;
	var accountentryamount = document.getElementById("accountentryamount").value;
	
	
	$.ajax({
		url: "../../functions/saveentry/"+dvno,
		type: 'post',
		data: {accounttitle:accounttitle,uacscode:uacscode,columnentry:columnentry,accountentryamount:accountentryamount},
		success: function(response) {
			console.log(response);
			//window.location.reload();;
		}
	});
	
	
}

function populateentry(scholarid){
	var dvno = document.getElementById("dvno").value;
	
	if(dvno!=''){
		//save voucher if update is enabled
		if($('#savevoucherbutton').prop("disabled")==false){
			alert("not yet saved");
			savevoucher(scholarid);
			
		}
		
			$.ajax({
			url: "../../functions/getentrydetails/"+dvno,
			type: 'post',
			
			success: function(response) {
				console.log(response);
				var data = JSON.parse(response);
				console.log(data);
				//alert(data.numberofentry);
				if(data.numberofentry==0){
					
					//start without data
					var voucherid = document.getElementById("voucherid").value;
					var fundcluster = document.getElementById("fundcluster").value;
					
						var dvno = document.getElementById("dvno").value;
						var accounttitle1 = "Donations";
						var uacscode1 = "5029908000";
						var columnentry1 = "Debit";
						var accountentryamount1 = document.getElementById("voucheramount").value;
						
						$.ajax({
							url: "../../functions/saveentry/"+dvno,
							type: 'post',
							data: {accounttitle:accounttitle1,uacscode:uacscode1,columnentry:columnentry1,accountentryamount:accountentryamount1,voucherid:voucherid},
							success: function(response) {
								console.log(response);
								//window.location.reload();;
								
				var table=document.getElementById("entryitems");
				$(table).append( "<tr><td><strong>"+accounttitle1+"</strong></td>"+
	"<td class='hidden-xs'>"+uacscode1+"</td>"+
	"<td class='hidden-xs'>"+accountentryamount1+"</td>"+
	"<td class='hidden-xs'>"+columnentry1+"</td>"+
	"<td class='text-center'>"+
	"<a href='javascript:void(0)' data-toggle='tooltip' title='Delete User' class='btn btn-effect-ripple btn-xs btn-danger'><i class='fa fa-times'></i></a></td></tr>");
				
				
				
							}
						});
						

		var voucherid = document.getElementById("voucherid").value;
		alert(voucherid);
		if(fundcluster =='101'){
			var accounttitle ="Cash - MDS, REGULAR ACCOUNT";
			var uacscode = "1010404000";
		}if(fundcluster =='151'){
			var accounttitle ="Cash - MDS, SPECIAL ACCOUNT";
			var uacscode = "1010405000";
		}
		
		var columnentry = "Credit";
		var accountentryamount = document.getElementById("voucheramount").value;		
	$.ajax({
		url: "../../functions/saveentry/"+dvno,
		type: 'post',
		data: {accounttitle:accounttitle,uacscode:uacscode,columnentry:columnentry,accountentryamount:accountentryamount,voucherid:voucherid},
		success: function(response) {
			console.log(response);
								//window.location.reload();;
								
				var table=document.getElementById("entryitems");
				$(table).append( "<tr><td><strong>"+accounttitle+"</strong></td>"+
	"<td class='hidden-xs'>"+uacscode+"</td>"+
	"<td class='hidden-xs'>"+accountentryamount+"</td>"+
	"<td class='hidden-xs'>"+columnentry+"</td>"+
	"<td class='text-center'>"+
	"<a href='javascript:void(0)' data-toggle='tooltip' title='Delete User' class='btn btn-effect-ripple btn-xs btn-danger'><i class='fa fa-times'></i></a></td></tr>");
	
							}
						});


					
					//end without data

					
				}else{
					//alert("with data");	
				}
				
				//window.location.reload();;
			}
		});
		
	}else{
		alert("Empty DV No.");
	}
	
	
	
	
	
	
	
	
	
}

function updatestudentlist(typecode){
	//var filteredstud=document.getElementById("filteredstudent");
	$('#filteredstudent').empty().append('');
						
	$.ajax({
		url: "functions/getscholarfiltered/"+typecode,
		type: 'post',
		data: {typecode:typecode},
		success: function(response) {
			//console.log(response);
			var data = JSON.parse(response);
			var filteredstud=document.getElementById("filteredstudent");
								//window.location.reload();;
			for(var ctr=0;ctr<data.length; ctr++){
				
				
		$(filteredstud).append( "<option value='"+data[ctr].scholarid+"'>"+data[ctr].fullname+"</option>");
			}					
	
				
				
				
		}
		});
	
}

function updatedvno(){
	//alert('test');
	var dvyear = document.getElementById("dvyear").value;
	var dvmonth = document.getElementById("dvmonth").value;
	var fundcluster = document.getElementById("fundcluster").value;
	var dvnostart = document.getElementById("dvnostart").value;
	
	var fulldvno = dvyear+"-"+fundcluster+"-"+dvmonth+"-"+dvnostart;
	
	document.getElementById("dvno").value = fulldvno;
	
}

function addbatchvoucher(){
	//alert('test');
	
	var dvnostart = document.getElementById("dvnostart").value;
	
	var finaldvno = document.getElementById("dvno").value;
	var semester = document.getElementById("semester").value;
	var schoolyear = document.getElementById("schoolyear").value;
	var amount = document.getElementById("amount").value;
	var scholarid = document.getElementById("filteredstudent").value;

	var fundcluster = document.getElementById("fundcluster").value;
	var voucherdate = document.getElementById("voucherdate").value;
	var modeofpayment = "MDS Check";
	var orsno = document.getElementById("orsno").value;
	var responsibility = "StuFAP Unit";
	var mfopap = "3 02 020000";
	var certifiedcash = 1;
	var certifiedsubject = 0;
	var certifiedsupporting = 1;
	var currentbatch = document.getElementById("currentbatch").value;

	
//save voucher
	$.ajax({
		url: "functions/savevoucher/"+scholarid,
		type: 'post',
		data: {fundcluster:fundcluster,voucherdate:voucherdate,dvno:finaldvno,modeofpayment:modeofpayment,orsno:orsno,responsibility:responsibility,mfopap:mfopap,voucheramount:amount,certifiedcash:certifiedcash,certifiedsubject:certifiedsubject,certifiedsupporting:certifiedsupporting,vouchersemester:semester,voucherschoolyear:schoolyear,currentbatch:currentbatch},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			//save entry
			var voucherid = data['lastid'];
			document.getElementById("lastvoucherid").value = voucherid;
			var accounttitle = document.getElementById("accounttitle").value;
			var amount = document.getElementById("amount").value;
			var columnentry = "Credit";
			var finaldvno = document.getElementById("dvno").value;
			$.ajax({
				url: "functions/saveentry/"+finaldvno,
				type: 'post',
				data: {accounttitle:accounttitle,amount:amount,columnentry:columnentry,accountentryamount:amount,voucherid,voucherid,finaldvno:finaldvno},
				success: function(response) {
					//console.log(response);
					var data = JSON.parse(response);
					console.log(data);
					
				
				}
				});
		
		}
		});
	
	
	
	
	//show in table
	$.ajax({
		url: "functions/getscholarfullname/"+scholarid,
		type: 'post',
		
		success: function(response) {
			
			var data = JSON.parse(response);
			var lastvoucher = document.getElementById("lastvoucherid").value;
			//console.log();
		var batchtable=document.getElementById("batchvouchertable");
			$(batchtable).append("<tr>"+
			"<td class='text-center'>"+finaldvno+"</td>"+
			"<td>"+data[0]['fullname']+"</td>"+
			"<td>"+semester+"</td>"+
			"<td>"+schoolyear+"</td>"+
			"<td class='text-center'>"+amount+"</td>"+
			"<td class='text-center'><a class='btn btn-effect-ripple btn-sm btn-primary' href='batchvoucher/printvoucher/"+lastvoucher+"' target='_blank'><i class='fa fa-print'></i></a><a href='#' data-toggle='tooltip' title='Cancel Voucher' class='btn btn-effect-ripple btn-sm btn-danger' ><i class='fa fa-times'></i></a> </td></tr>");
		}
		});
	
	
	//var fulldvno = dvyear+"-"+fundcluster+"-"+dvmonth+"-"+dvnostart;
	dvnostart++;
	document.getElementById("dvnostart").value = dvnostart;
	
	setTimeout(function(){updatedvno();},1500);
}





//startwidget();