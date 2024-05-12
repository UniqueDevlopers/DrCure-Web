$("#submit_btn").click(function(e) {
    // console.log('234567890',e)

    e.preventDefault();
    var rating = $.trim($("#rating").val());
    var name = $.trim($("#name").val());
    var mobile_no = $.trim($("#mobile").val());
    var email = $.trim($("#email").val());
    var describe = $.trim($("#describe").val());
   
    var utm_source = $.trim($("#utm_source").val());
    var utm_medium = $.trim($("#utm_medium").val());
    var utm_campaign = $.trim($("#utm_campaign").val());
    var g_res = $("#g-res").val();
 
    if (!name) {
        $('#allerror').html("Enter Your Full Name.");
        return false;
    }
    if (/[^a-zA-Z \-]/.test(name)) {
        $('#allerror').html("Enter only alphabets in name.");
        return false;
    }
      var mob = /^[0-9]{10}$/;
      if(!mobile_no)
      {
          $('#allerror').html("Enter Your Mobile Number")
          return false;
      }
      if (mob.test(mobile_no) == false)
      {
          $('#allerror').html("Enter only 10 digits in Mobile Number")
          return false;
      }
    if (!email) {
          $('#allerror').html("Enter your Email ID.");
          return false;
      }
      var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
      if (emailReg.test(email) == false)
      {
        $('#allerror').html("Enter Valid Email ID.");
        return false;
       }  
 
           
      if (!describe)
      {
          $('#allerror').html("Enter Describe.");
          return false;
      }
    //   if (grecaptcha.getResponse() == "") {
    //     e.preventDefault();
    //     $('#allerror').html("Please verify your captcha");
    //     return false;
    // }
    // else
    // {
    //     $('#allerror').html("");
    // }

    if (!g_res) {
        return false;
    }
    // var g_res=grecaptcha.getResponse();

      
    // $("#submit_btn").prop('disabled', true);
    $.ajax({

        url: "submitenquiry.php",
        type: 'POST',
        dataType: 'json',
        data: {rating:rating,name:name,mobile:mobile_no,email:email,describe:describe,utm_source:utm_source,utm_medium:utm_medium,utm_campaign:utm_campaign, g_res: g_res}, 
        type: 'POST',
        success: function(response)
        {
             console.log(response)
             if(response.status=="1")
              {
                    $("#allerror").html("Thank you for submitting the form. Our team will reach out to you soon.").css("font-weight", "600");
                    $('#main_form').trigger("reset");
                    grecaptcha.reset();  
                    /*$('#main_form').hide("");*/
                    $("#allerror").addClass("bluefoot");
                    $("#allerror").css({"font-size": "24px","padding-bottom":"16px"});
                    $("#allerror").removeClass("text-danger");
                   // window.setTimeout(function(){location.reload()},5000);
                } else {
                     $("#allerror").html("Oops..!! Something went wrong. Please try again.");
                    // $('#contactform').trigger("reset");
                    $("#allerror").addClass("text-danger");

                }
        }
 });
});


$("#submit_btn1").click(function(e) {

    e.preventDefault();
    var rating = $.trim($("#rating1").val());
    var name = $.trim($("#name1").val());
    var mobile_no = $.trim($("#mobile1").val());
    var email = $.trim($("#email1").val());
    var describe = $.trim($("#describe1").val());
   
    var utm_source = $.trim($("#utm_source").val());
    var utm_medium = $.trim($("#utm_medium").val());
    var utm_campaign = $.trim($("#utm_campaign").val());
    var g_res = $("#g-res1").val();
 
    if (!name) {
        $('#allerror1').html("Enter Your Full Name.");
        return false;
    }
    if (/[^a-zA-Z \-]/.test(name)) {
        $('#allerror1').html("Enter only alphabets in name.");
        return false;
    }
      var mob = /^[0-9]{10}$/;
      if(!mobile_no)
      {
          $('#allerror1').html("Enter Your Mobile Number")
          return false;
      }
      if (mob.test(mobile_no) == false)
      {
          $('#allerror1').html("Enter only 10 digits in Mobile Number")
          return false;
      }
    if (!email) {
          $('#allerror1').html("Enter your Email ID.");
          return false;
      }
      var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
      if (emailReg.test(email) == false)
      {
        $('#allerror1').html("Enter Valid Email ID.");
        return false;
       }  
            
     if (!describe)
      {
          $('#allerror1').html("Enter Describe.");
          return false;
      }
    //   if (grecaptcha.getResponse(0) == "") {
    //     e.preventDefault();
    //     $('#allerror1').html("Please verify your captcha");
    //     return false;
    // }
    // else
    // {
    //     $('#allerror1').html("");
    // }
    //var g_res = document.getElementById('#example2').val();
    if (!g_res) {
        return false;
    }

      
    // $("#submit_btn1").prop('disabled', true);
    $.ajax({

        url: "submitenquiry.php",
        type: 'POST',
        dataType: 'json',
        data: {rating:rating,name:name,mobile:mobile_no,email:email,describe:describe,utm_source:utm_source,utm_medium:utm_medium,utm_campaign:utm_campaign, g_res: g_res}, 
        type: 'POST',
        success: function(response)
        {
             console.log(response)
             if(response.status=="1")
             {
                    $("#allerror1").html("Thank you for submitting the form. Our team will reach out to you soon.").css("font-weight", "600");
                    $('#main_form1').trigger("reset");
                    grecaptcha.reset();  
                   /* $('#main_form1').hide("");*/
                    $("#allerror1").addClass("bluefoot");
                    $("#allerror1").css({"font-size": "24px","padding-bottom":"16px"});
                    $("#allerror1").removeClass("text-danger");
                   // window.setTimeout(function(){location.reload()},5000);
                } else {
                     $("#allerror1").html("Oops..!! Something went wrong. Please try again.");
                    // $('#contactform').trigger("reset");
                    $("#allerror1").addClass("text-danger");

                }
        }
 });
});

$("#subscribe_btn").click(function(e) {

    e.preventDefault();
   
    var email = $.trim($("#email_sub").val());

   
    var utm_source = $.trim($("#utm_source").val());
    var utm_medium = $.trim($("#utm_medium").val());
    var utm_campaign = $.trim($("#utm_campaign").val());

    //  var g_res = $("#g-res4").val();
   
    if (!email) {
          $('#allerror2').html("Enter your Email ID.");
          return false;
      }
      var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
      if (emailReg.test(email) == false)
      {
        $('#allerror2').html("Enter Valid Email ID.");
        return false;
       }  
            
    //    if (grecaptcha.getResponse(2) == "") {
    //     e.preventDefault();
    //     $('#allerror2').html("Please Verify Your Captcha");
    //     return false;
    // }
   //var g_res = document.getElementById('#example2').val();
       if(!g_res){
        return false;
       }
     //$("#subscribe_btn").prop('disabled', true);

    //  alert(g-res4);

    $.ajax({

        url: "submitenquirysubscribe.php",
        type: 'POST',
        dataType: 'json',
        data: {email_sub:email,utm_source:utm_source,utm_medium:utm_medium,utm_campaign:utm_campaign, g_res: g_res}, 
        type: 'POST',
        success: function(response)
        {
             console.log(response)
             if(response.status=="1")
                {
                    $("#allerror2").html("Thank you for subscribing to our newsletter.").css("font-weight", "600");
                    $('#subscribe_form').trigger("reset");
                    grecaptcha.reset();  
                    /*$('#subscribe_form').hide("");*/
                    $("#allerror2").addClass("bluefoot");
                    $("#allerror2").css({"font-size": "24px","padding-bottom":"16px"});
                    $("#allerror2").removeClass("text-danger");
                   // window.setTimeout(function(){location.reload()},5000);
                } else {
                     $("#allerror2").html("Oops..!! Something went wrong. Please try again.");
                    // $('#contactform').trigger("reset");
                    $("#allerror2").addClass("text-danger");

                }
             /*{             
                 
        
      window.location.href = "thankyou.php?utm_source=" + utm_source + "&utm_medium=" + utm_medium + "&utm_campaign=" + utm_campaign ;
                
             }
             else
             {
               alert("please try again.");         
             }*/
        }
 });
});
// new subscribe button 


$("#subscribe_btnnew").click(function(e) {

    e.preventDefault();
   
    var email = $.trim($("#email_subs").val());

   
    var utm_source = $.trim($("#utm_source").val());
    var utm_medium = $.trim($("#utm_medium").val());
    var utm_campaign = $.trim($("#utm_campaign").val());

      var g_res = $("#g-res4").val();
    console.log(email);
    if (!email) {
          $('#subscribe_error').html("Enter your Email ID.");
          return false;
      }
      var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
      if (emailReg.test(email) == false)
      {
        $('#subscribe_error').html("Enter Valid Email ID.");
        return false;
       }  
     
       if(!g_res){
        return false;
       }

    //  alert(g-res4);

    $.ajax({

        url: "submitenquirysubscribe.php",
        type: 'POST',
        dataType: 'json',
        data: {email_subs:email,utm_source:utm_source,utm_medium:utm_medium,utm_campaign:utm_campaign, g_res: g_res}, 
        type: 'POST',
        success: function(response)
        {
             console.log(response)
             if(response.status=="1")
                {
                    $("#subscribe_error").html("Thank you for subscribing to our newsletter.").css("font-weight", "600");
                    $('#subscribe_form').trigger("reset");
                    grecaptcha.reset();  
                    /*$('#subscribe_form').hide("");*/
                    $("#subscribe_error").addClass("bluefoot");
                    $("#subscribe_error").css({"font-size": "24px","padding-bottom":"16px"});
                    $("#subscribe_error").removeClass("text-danger");
                   // window.setTimeout(function(){location.reload()},5000);
                } else {
                     $("#subscribe_error").html("Oops..!! Something went wrong. Please try again.");
                    // $('#contactform').trigger("reset");
                    $("#subscribe_error").addClass("text-danger");

                }
             /*{             
                 
        
      window.location.href = "thankyou.php?utm_source=" + utm_source + "&utm_medium=" + utm_medium + "&utm_campaign=" + utm_campaign ;
                
             }
             else
             {
               alert("please try again.");         
             }*/
        }
 });
});

//end 
$("#submit_btn_asso").click(function(e) {

    e.preventDefault();
   
    var name = $.trim($("#name_asso").val());
    var email = $.trim($("#email_asso").val());
    var mobile = $.trim($("#mobile_asso").val());

    var utm_source = $.trim($("#utm_source").val());
    var utm_medium = $.trim($("#utm_medium").val());
    var utm_campaign = $.trim($("#utm_campaign").val());
    var create_date = $.trim($("#create_date").val());

    var g_res = $("#g-res2").val();
   // console.log("g_res",g_res);
    if (!name) {
        $('#allerror_asso').html("Enter Your Full Name.");
        return false;
    }
    if (/[^a-zA-Z \-]/.test(name)) {
        $('#allerror_asso').html("Enter only alphabets in name.");
        return false;
    }

    if (!email) {
        $('#allerror_asso').html("Enter your Email ID.");
        return false;
    }
    var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
    if (emailReg.test(email) == false)
    {
      $('#allerror_asso').html("Enter Valid Email ID.");
      return false;
     }  
      var mob = /^[0-9]{10}$/;
      if(!mobile)
      {
          $('#allerror_asso').html("Enter Your Mobile Number")
          return false;
      }
      if (mob.test(mobile) == false)
      {
          $('#allerror_asso').html("Enter only 10 digits in Mobile Number")
          return false;
      }
 
     
      if (!g_res) {
       // e.preventDefault();
       // $('#allerror_asso').html("Please Verify Your Captcha");
        return false;
    }
    // var g_res = document.getElementById('#example3').val();
      
   // alert(g_res);
      
    //  $("#submit_btn_asso").prop('disabled', true);
     jQuery.ajax({

        url: "submitenquiry_asso.php",
        type: 'POST',
        dataType: 'json',
        data: {name:name,email:email,mobile:mobile,utm_source:utm_source,utm_medium:utm_medium,utm_campaign:utm_campaign,create_date:create_date, g_res: g_res}, 
        type: 'POST',
        success: function(response)
        {
             console.log(response)
             if(response.status=="1")
             {
                    $("#allerror_asso").html("Thank you for submitting the form. Our team will reach out to you soon.").css("font-weight", "600");
                    $("#associate_form").trigger("reset");
                    grecaptcha.reset();  

                   /* $('#subscribe_form1').hide("");*/
                    $("#allerror_asso").addClass("bluefoot");
                    $("#allerror_asso").css({"font-size": "24px","padding-bottom":"16px"});
                    $("#allerror_asso").removeClass("text-danger");
                   // window.setTimeout(function(){location.reload()},5000);
                } else {
                     $("#allerror_asso").html("Oops..!! Something went wrong. Please try again.");
                    // $('#contactform').trigger("reset");
                    $("#allerror_asso").addClass("text-danger");

                }
        }
 });
});

$("#submit_btn_asso_mob").click(function(e) {

    e.preventDefault();
   
    var name = $.trim($("#name_asso_mob").val());
    var email = $.trim($("#email_asso_mob").val());
    var mobile = $.trim($("#mobile_asso_mob").val());

    var utm_source = $.trim($("#utm_source").val());
    var utm_medium = $.trim($("#utm_medium").val());
    var utm_campaign = $.trim($("#utm_campaign").val());
    var create_date = $.trim($("#create_date").val());
    var g_res = $("#g-res3").val();
    // var g_res = $("#g-res5").val();
   // console.log("g_res",g_res);
    if (!name) {
        $('#allerror_asso_mob').html("Enter Your Full Name.");
        return false;
    }
    if (/[^a-zA-Z \-]/.test(name)) {
        $('#allerror_asso_mob').html("Enter only alphabets in name.");
        return false;
    }

    if (!email) {
        $('#allerror_asso_mob').html("Enter your Email ID.");
        return false;
    }
    var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
    if (emailReg.test(email) == false)
    {
      $('#allerror_asso_mob').html("Enter Valid Email ID.");
      return false;
     }  
      var mob = /^[0-9]{10}$/;
      if(!mobile)
      {
          $('#allerror_asso_mob').html("Enter Your Mobile Number")
          return false;
      }
      if (mob.test(mobile) == false)
      {
          $('#allerror_asso_mob').html("Enter only 10 digits in Mobile Number")
          return false;
      }
 
     
      if (!g_res) {
       
        return false;
    }
    // alert(g_res);
      
     // $("#submit_btn_asso_mob").prop('disabled', true);
      
    //  alert("hii");
     jQuery.ajax({
     
        url: "submitenquiry_asso.php",
        type: 'POST',
        dataType: 'json',
        data: {name:name,email:email,mobile:mobile,utm_source:utm_source,utm_medium:utm_medium,utm_campaign:utm_campaign,create_date:create_date, g_res: g_res}, 
        type: 'POST',
        success: function(response)
        {
            // alert("hi");
             console.log(response);
             if(response.status=="1")
             {
                    $("#allerror_asso_mob").html("Thank you for submitting the form. Our team will reach out to you soon.").css("font-weight", "600");
                    $("#associate_form").trigger("reset");
                    grecaptcha.reset();  

                   /* $('#subscribe_form1').hide("");*/
                    $("#allerror_asso_mob").addClass("bluefoot");
                    $("#allerror_asso_mob").css({"font-size": "24px","padding-bottom":"16px"});
                    $("#allerror_asso_mob").removeClass("text-danger");
                   // window.setTimeout(function(){location.reload()},5000);
                } else {
                     $("#allerror_asso_mob").html("Oops..!! Something went wrong. Please try again.");
                    // $('#contactform').trigger("reset");
                    $("#allerror_asso_mob").addClass("text-danger");

                }
        }
 });
});


$("#subscribe_btn1").click(function(e) {

    e.preventDefault();
   
    var email = $.trim($("#email_sub1").val());

   
    var utm_source = $.trim($("#utm_source").val());
    var utm_medium = $.trim($("#utm_medium").val());
    var utm_campaign = $.trim($("#utm_campaign").val());
    var g_res = $("#g-res4").val();
 
   
    if (!email) {
          $('#allerror3').html("Enter your Email ID.");
          return false;
      }
      var emailReg = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
      if (emailReg.test(email) == false)
      {
        $('#allerror3').html("Enter Valid Email ID.");
        return false;
       }  
            
        
    //    if (grecaptcha.getResponse(4) == "") {
    //     e.preventDefault();
    //     $('#allerror3').html("Please Verify Your Captcha");
    //     return false;
    // }
   // var g_res = grecaptcha.getResponse();
       if(!g_res){
        return false;
       }
       
     $("#subscribe_btn1").prop('disabled', true);
    $.ajax({

        url: "submitenquirysubscribe.php",
        type: 'POST',
        dataType: 'json',
        data: {email_sub:email,utm_source:utm_source,utm_medium:utm_medium,utm_campaign:utm_campaign, g_res: g_res}, 
        type: 'POST',
        success: function(response)
        {
             console.log(response)
             if(response.status=="1")
             {
                    $("#allerror3").html("Thank you for subscribing to our newsletter.").css("font-weight", "600");
                    $('#subscribe_form1').trigger("reset");
                    grecaptcha.reset();  
                   /* $('#subscribe_form1').hide("");*/
                    $("#allerror3").addClass("bluefoot");
                    $("#allerror3").css({"font-size": "24px","padding-bottom":"16px"});
                    $("#allerror3").removeClass("text-danger");
                   // window.setTimeout(function(){location.reload()},5000);
                } else {
                     $("#allerror3").html("Oops..!! Something went wrong. Please try again.");
                    // $('#contactform').trigger("reset");
                    $("#allerror3").addClass("text-danger");

                }
        }
 });
});
 

