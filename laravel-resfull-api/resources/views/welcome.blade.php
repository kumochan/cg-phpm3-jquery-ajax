<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<p>First Name: <input type="text" name="first_name" id="first_name" />  <span id="first_name"></span></p>
<p>Last Name:  <input type="text" name="last_name" id="last_name" /> <span id="last_name"></span></p>
<button id="addCustomer">ADD</button>
<script type="text/javascript">

    $(document).ready(function() {
        // Handler for .ready() called.
        $('#addCustomer').click(function () {
            //alert(1);
            addCustomer();
        });
    });


	var addCustomer = function(){
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var customer = {first_name, last_name};
        console.log(customer);

        $.ajax({
            type:'POST',
            url:'/api/customers/',
            data:customer,
            success:function(response){
                // Log response
                console.log(response);
                //$('#first_name').text(response.first_name);
                //$('#last_name').text(response.last_name);
            }
        });
    }
    // var data = {first_name: "Kieu", last_name: "Phong"};
    // $.ajax({
    //     type:"POST",
    //     url:'/api/customers/',
    //     data: data,
    //     success: function(response){
    //         console.log(response);
    //     }
    // });

//
// var data;
//  $.ajax({
//  	type:'POST',
//  	url: '/api/customers',
//  	data: {'first_name':'trong','last_name':'Peter'},
//  	async: false,
//  	success:function(response) {
//  		//console.log(response);
//  		data = response;
//  	}
//  });
//  console.log(data);
</script>
