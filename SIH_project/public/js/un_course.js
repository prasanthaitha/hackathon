var app = angular.module("myModule" , []).controller("mycontroller", function($scope){
     
    var mytable = [
        {course:"B. Arch",college:"Technical college of Engineering",city:"Noida",state:" Uttar Pradesh"},
        {course:"B. Arch",college:"Institute of technology Noida",city:"Noida",state:"Uttar Pradesh"},
        {course:"B. Tech",college:" ABC university Patna",city:"Patna",state:"Bihar"},
        {course:"B. Des",college:"Gujrat University",city:"Gujrat",state:"Gandhinagar"},
        {course:"B.Tech",college:"Gujrat College of Engineering",city:"Gujrat",state:"Gandhinagar"},
        {course:"M.Tech",college:"Patna University ",city:"Patna",state:"Bihar"},
        {course:"MSc",college:"SR Group of Institute ",city:"Jhansi",state:"Uttar Pradesh"},
        {course:"BSc",college:"MR Institute of Engineering",city:"kannur",state:"Tamilnadu"},
        {course:"BSc",college:"Siya Ram group ",city:"Jabalpur",state:"M.P."},
        {course:"MSC",college:"Jabalpur Engineering College",city:"Jabalpur",state:"M.P."},
        
    ];
    $scope.mytable = mytable;
});