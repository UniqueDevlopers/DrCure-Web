$(document).ready(function() {
    
/*smooth scroll starts*/
     $('.navbar-nav li a').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        href = '#' + href.split('#').pop();

        var $target = $(href).offset().top - 100;

        $('html, body').animate({
            'scrollTop': $target
        }, 900, 'swing', function() {
            window.history.pushState("object or string", "Title", href);
        });
        if (screen.width <= 991) {
            $(".navbar-toggler").trigger('click');
        }
    });

     $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
            $(".navbar").addClass("fixed-top");
        } else {
            $(".navbar").removeClass("fixed-top");
        }
    });
/*smooth scroll ends*/

/*remove active nav-tab when click outside of nav-tab starts*/

$(document).mouseup(function(e) {
    var container = $("#tablist"); // target ID or class
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        // get Event here
        $('.active').removeClass('active');
    }
});
/*remove active nav-tab when click outside of nav-tab ends*/

/*Add color to active tab starts*/
$('.navbar-nav .nav-link').click(function(){
    $('.navbar-nav .nav-link').removeClass('active');
    $(this).addClass('active');
})
/*Add color to active tab ends*/ 

    $('#storecarousel_slide').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        navigation: true,
        margin: 0,
        ltr: true,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<img src='images/chevron_left_black_24dp.svg'>", "<img src='images/chevron_right_black_24dp.svg'>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

 
 
    $('#storeimgcarousel_slide').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        navigation: true,
        margin: 0,
        ltr: true,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<img src='images/chevron_left_black_24dp.svg'>", "<img src='images/chevron_right_black_24dp.svg'>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

 $('#banner_slide').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        navigation: true,
        margin: 0,
        ltr: true,
        loop: true,
        dots: true,
        nav: false,
        navText: ["<img src='images/chevron_left_black_24dp.svg'>", "<img src='images/chevron_right_black_24dp.svg'>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

 $('#banner2_slide').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        // navigation: true,
        margin: 0,
        ltr: true,
        loop: true,
        dots: true,
        nav: false,
        // navText: [""],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

   

    // $('a[href^="#"]').on('click',function (e) {
        
        
    // });


// new changes for statewise start


var AndraPradesh = ["Select City","Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"];
var ArunachalPradesh = ["Select City","Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang","Itanagar"];
var Assam = ["Select City","Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup Metropolitan","Kamrup (Rural)","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Dima Hasao","Sivasagar","Sonitpur","South Salmara Mankachar","Tinsukia","Udalguri","West Karbi Anglong"];
var Bihar = ["Select City","Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];
var Chhattisgarh = ["Select City","Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariaband","Janjgir Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Koriya","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
var Goa = ["Select City","Goa"];
var Gujarat = ["Select City","Ahmedabad","Amreli","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Botad","Chhota Udaipur","Dahod","Dang","Devbhoomi Dwarka","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kheda","Kutch","Mahisagar","Mehsana","Morbi","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Vadodara","Valsad"];
var Haryana = ["Select City","Ambala","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gurugram","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"];
var HimachalPradesh = ["Select City","Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul Spiti","Mandi","Shimla","Sirmaur","Solan","Una"];
var JammuKashmir = ["Select City","Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
var Jharkhand = ["Select City","Bokaro","Chatra","Deoghar","Dhanbad","Dumka","Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
var Karnataka = ["Select City","Bangalore","Chitradurga","Davangere","Dharwad","Shivamogga","Tumkur"];
var Kerala = ["Select City","Calicut","Ernakulam","Kannur","Kottayam","Kozhikode","Thiruvananthapuram"];
var MadhyaPradesh = ["Select City","Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
"Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
var Maharashtra = ["Select City","Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"];
var Manipur = ["Select City","Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
var Meghalaya = ["Select City","East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","Ri Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
var Mizoram = ["Select City","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
var Nagaland = ["Select City","Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
var Odisha = ["Select City","Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Debagarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghpur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar","Khordha","Koraput","Malkangiri","Mayurbhanj","Nabarangpur","Nayagarh","Nuapada","Puri","Rayagada","Sambalpur","Subarnapur","Sundergarh"];
var Punjab = ["Select City","Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Firozpur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Mohali","Muktsar","Pathankot","Patiala","Rupnagar","Sangrur","Shaheed Bhagat Singh Nagar","Tarn Taran"];
var Rajasthan = ["Select City","Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Ganganagar","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Tonk","Udaipur"];
var Sikkim = ["Select City","East Sikkim","North Sikkim","South Sikkim","West Sikkim"];
var TamilNadu = ["Select City","Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];
var Telangana = ["Select City","Ranga Reddy","Medak","Hyderabad"];
var Tripura = ["Select City","Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"];
var UttarPradesh = ["Select City","Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi","Amroha","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kasganj","Kaushambi","Kheri","Kushinagar","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","Raebareli","Rampur","Saharanpur","Sambhal","Sant Kabir Nagar","Shahjahanpur","Shamli","Shravasti","Siddharthnagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"];
var Uttarakhand  = ["Select City","Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri","Pithoragarh","Rudraprayag","Tehri","Udham Singh Nagar","Uttarkashi"];
var WestBengal = ["Select City","Alipurduar","Bankura","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah","Jalpaiguri","Jhargram","Kalimpong","Kolkata","Malda","Murshidabad","Nadia","North 24 Parganas","Paschim Bardhaman","Paschim Medinipur","Purba Bardhaman","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];
var AndamanNicobar = ["Select City","Nicobar","North Middle Andaman","South Andaman"];
var Chandigarh = ["Select City","Chandigarh"];
var DadraHaveli = ["Select City","Dadra Nagar Haveli"];
var DamanDiu = ["Select City","Daman","Diu"];
var Delhi = ["Select City","Central Delhi","East Delhi","New Delhi","North Delhi","North East Delhi","North West Delhi","Shahdara","South Delhi","South East Delhi","South West Delhi","West Delhi"];
var Lakshadweep = ["Select City","Lakshadweep"];
var Puducherry = ["Select City","Karaikal","Mahe","Puducherry","Yanam"];




// new changes for statewise end 
 
$("#inputState").change(function(){
    var StateSelected = $(this).val();
    var optionsList;
    var htmlString = "";
  
    switch (StateSelected) {
      case "Andra Pradesh":
          optionsList = AndraPradesh;
          break;
      case "Arunachal Pradesh":
          optionsList = ArunachalPradesh;
          break;
      case "Assam":
          optionsList = Assam;
          break;
      case "Bihar":
          optionsList = Bihar;
          break;
      case "Chhattisgarh":
          optionsList = Chhattisgarh;
          break;
      case "Goa":
          optionsList = Goa;
          break;
      case  "Gujarat":
          optionsList = Gujarat;
          break;
      case "Haryana":
          optionsList = Haryana;
          break;
      case "Himachal Pradesh":
          optionsList = HimachalPradesh;
          break;
      case "Jammu and Kashmir":
          optionsList = JammuKashmir;
          break;
      case "Jharkhand":
          optionsList = Jharkhand;
          break;
      case  "Karnataka":
          optionsList = Karnataka;
          break;
      case "Kerala":
          optionsList = Kerala;
          break;
      case "Lakshadweep":
          optionsList = Lakshadweep;
          break;
      case  "Madya Pradesh":
          optionsList = MadhyaPradesh;
          break;
      case "Maharashtra":
          optionsList = Maharashtra;
          break;
      case  "Manipur":
          optionsList = Manipur;
          break;
      case "Meghalaya":
          optionsList = Meghalaya ;
          break;
      case  "Mizoram":
          optionsList = Mizoram;
          break;
      case "Nagaland":
          optionsList = Nagaland;
          break;Odisha
      case  "Orissa":
          optionsList = Orissa;
          break;
     case  "Odisha":
          optionsList = Odisha;
          break;
      case "Punjab":
          optionsList = Punjab;
          break;
      case "Puducherry":
          optionsList = Puducherry;
          break;    
      case  "Rajasthan":
          optionsList = Rajasthan;
          break;
      case "Sikkim":
          optionsList = Sikkim;
          break;
      case  "Tamil Nadu":
          optionsList = TamilNadu;
          break;
      case  "Telangana":
          optionsList = Telangana;
          break;
      case "Tripura":
          optionsList = Tripura ;
          break;
      case  "Uttaranchal":
          optionsList = Uttaranchal;
          break;
      case  "Uttar Pradesh":
          optionsList = UttarPradesh;
          break;
      case "Uttarakhand":
         optionsList = Uttarakhand;
          break;    
      case "West Bengal":
          optionsList = WestBengal;
          break;
      case  "Andaman and Nicobar Islands":
          optionsList = AndamanNicobar;
          break;
      case "Chandigarh":
          optionsList = Chandigarh;
          break;
      case  "Dadar and Nagar Haveli":
          optionsList = DadraHaveli;
          break;
      case "Daman and Diu":
          optionsList = DamanDiu;
          break;
      case  "Delhi":
          optionsList = Delhi;
          break;
      case "Lakshadeep":
          optionsList = Lakshadeep ;
          break;
      case  "Pondicherry":
          optionsList = Pondicherry;
          break;
  }
  
  
    for(var i = 0; i < optionsList.length; i++){
      htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
    }
    $("#inputDistrict").html(htmlString);
  
  });
      
  
  });
  
  
  
  
  



