var app = angular.module("myModule" , []).controller("mycontroller", function($scope){
     
    var mytable = [
        {College_Name:"SRI VENKATESHWARA COLLEGE OF ARCHITECTURE",Pincode:"1-912922",City:"noida",State:"Uttar Pradesh"},
        {College_Name:"SRI VENKATESHWARA COLLEGE OF ARCHITECTURE",Pincode:"1-912736",City:"NCR",State:"Madhya Pradesh"},
        {College_Name:"MASTERJI COLLEGE OF ARCHITECTURE",Pincode:"1-918338",City:"NCR",State:"Uttar Pradesh"},
        {College_Name:"MASTER COLLEGE",Pincode:"1-912234",City:"Jabalpur",State:"Madhya Pradesh"},
        {College_Name:"TIRUVANTHARAM COLLEGE",Pincode:"1-912098",City:"jhansi",State:"Uttar Pradesh"},
        {College_Name:"GPL COLLEGE OF ARCHITECTURE",Pincode:"1-923922",City:"noida",State:"gandhi nagar"},
        {College_Name:"MOSAIC COLLEGE",Pincode:"1-912234",City:"patna",State:"Haryana"},
        {College_Name:"BEST COLLEGE",Pincode:"1-912323",City:"patna",State:"Panjab"},
        {College_Name:"FACNTABULOUS COLLEGE",Pincode:"1-913212",City:"Gujrat",State:"Delhi"},
        {College_Name:"RADIANT COLLEGE JABALPUR",Pincode:"1-917872",City:"noida",State:"Bihar"},
        {College_Name:"HITKARNI COLLEGE",Pincode:"1-912788",City:"noida",State:"Delhi"},
        {College_Name:"ABES KANCHEEPURAM",Pincode:"1-912555",City:"Gujrat",State:"delhi"},
        {College_Name:"KRISHNA COLLEGE",Pincode:"1-912776",City:"Gujrat",State:"Uttar Pradesh"},
        {College_Name:"DR.KASHINATH COLLEGE",Pincode:"1-976762",City:"noida",State:"Bihar"},
        {College_Name:"DR.REDDY COLLEGE",Pincode:"1-915778",City:"Jabalpur",State:"Delhi"},
        {College_Name:"SR INSTITUTE JHANSI",Pincode:"1-909652",City:"Jhansi",State:"Panjab"},
        {College_Name:"SRI JHANSI",Pincode:"1-912656",City:"Jabalpur",State:"Uttar Pradesh"},
        {College_Name:"AWESOME COLLEGE",Pincode:"1-977672",City:"Udupi",State:"Madhya Pradesh"},
        {College_Name:"VIDYA COLLEGE",Pincode:"1-965655",City:"Jhansi",State:"Uttar Pradesh"},
          {College_Name:"GYANDEV INSTITUTE",Pincode:"1-955445",City:"Jabalpur",State:"Haryana"},
         
    ];
    $scope.mytable = mytable;
});