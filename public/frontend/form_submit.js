var utm_source='';
var utm_medium='';
var utm_campaign='';
var utm_link='';
var utm='';
$(document).ready(function(){
    var url=window.location.href;
    // get query string from url (optional) or window
    var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

    // we'll store the parameters here
    var obj = {};

    // if query string exists
    if (queryString) {

        // stuff after # is not part of query string, so get rid of it
        queryString = queryString.split('#')[0];

        // split our query string into its component parts
        var arr = queryString.split('&');

        for (var i=0; i<arr.length; i++) {
            // separate the keys and the values
            var a = arr[i].split('=');

            // in case params look like: list[]=thing1&list[]=thing2
            var paramNum = undefined;
            var paramName = a[0].replace(/\[\d*\]/, function(v) {
                paramNum = v.slice(1,-1);
                return '';
            });

            // set parameter value (use 'true' if empty)
            var paramValue = typeof(a[1])==='undefined' ? true : a[1];

            // (optional) keep case consistent
            paramName = paramName.toLowerCase();
            paramValue = paramValue.toLowerCase();

            // if parameter name already exists
            if (obj[paramName]) {
                // convert value to array (if still string)
                if (typeof obj[paramName] === 'string') {
                    obj[paramName] = [obj[paramName]];
                }
                // if no array index number specified...
                if (typeof paramNum === 'undefined') {
                    // put the value on the end of the array
                    obj[paramName].push(paramValue);
                }
                // if array index number specified...
                else {
                    // put the value at that index number
                    obj[paramName][paramNum] = paramValue;
                }
            }
            // if param name doesn't exist yet, set it
            else {
                obj[paramName] = paramValue;
            }
        }
    }

    utm_source=obj['utm_source']
    utm_medium=obj['utm_medium']
    utm_campaign=obj['utm_campaign']
    
    if(typeof utm_source=='undefined'){
        utm_source='';
    }
    if(typeof utm_medium=='undefined'){
        utm_medium='';
    }
    if(typeof utm_campaign=='undefined'){
        utm_campaign='';
    }
    custom_link();

     var link1 = document.getElementById("");
   
     var link4 = document.getElementById("");
     
    utm_link=""+utm
    console.log(utm_link);
  
   

});


function custom_link(){

    if(utm_source==''){ utm= "?utm_medium="+utm_medium+"&utm_campaign="+utm_campaign}
    if(utm_medium==''){ utm= "?utm_source="+utm_source+"&utm_campaign="+utm_campaign}
    if(utm_campaign==''){utm= "?utm_source="+utm_source+"&utm_medium="+utm_medium}
    if((utm_source=='')&&(utm_medium==''))
    {
        utm= "?utm_campaign="+utm_campaign
    }
    if((utm_campaign=='')&&(utm_medium==''))
    {
        utm= "?utm_source="+utm_source
    }
    if((utm_source=='')&&(utm_campaign==''))
    {
        utm= "?utm_medium="+utm_medium
    }
    if((utm_source=='')&&(utm_campaign=='')&&(utm_medium==''))
    {
        utm= ""
    }
    if((utm_source!='')&&(utm_campaign!='')&&(utm_medium!=''))
    {
        utm= "?utm_source="+utm_source+"&utm_medium="+utm_medium+"&utm_campaign="+utm_campaign
    }
}

