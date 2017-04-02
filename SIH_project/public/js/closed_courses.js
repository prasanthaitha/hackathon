var app = angular.module("myModule" , [],function($interpolateProvider)
{
    $interpolateProvider.startSymbol('<%');
     $interpolateProvider.endSymbol('%>');
});



app.controller("mycontroller", function($scope){
     
    var mytable = [
        {aicte_id:"1-2814148034	",institute_name:"KUPPAM ENGINEERING COLLEGE",institute_type:"Unaided - Private	",State:"Andhra Pradesh	",district:"CHITTOOR",university:"Jawaharlal Nehru Technological University, Anantapur	",level:"UNDER GRADUATE	",course:"INFORMATION TECHNOLOGy"},
         {aicte_id:"1-2814148876",institute_name:"KUPPAM ENGINEERING COLLEGE	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"MASTERS IN COMPUTER APPLICATIONS	"},
         {aicte_id:"1-2814148748",institute_name:"NOVA COLLEGE OF ENGINEERING TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"COMPUTER SCIENCE AND ENGINEERING	"},
        {aicte_id:"1-2814148876",institute_name:"NOVA COLLEGE OF ENGINEERING TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"ELECTRONICS & COMMUNICATION ENGG	"},
         {aicte_id:"1-2814167534",institute_name:"PNCKR COLLEGE OF PG COURSES	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"ELECTRICAL AND ELECTRONICS ENGINEERING"},
         {aicte_id:"1-2814129034",institute_name:"PNCKR COLLEGE OF PG COURSES	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"MECHANICAL ENGINEERING	"},
        {aicte_id:"1-2814142874",institute_name:"PRAVEENYA INSTITUTE OF MARINE ENGINEERING MARITIME STUDIES	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"MASTER OF COMPUTER APPLICATIONS	"},
         {aicte_id:"1-2814148874",institute_name:"SRI PADMAVATHI SCHOOL OF PHARMACY TIRUCHANOOR TIRUPATI CHITTOORDT ANDHRA PRADESH	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"MASTER OF COMPUTER APPLICATIONS	"},
         {aicte_id:"1-2814142870",institute_name:"SRI PADMAVATHI SCHOOL OF PHARMACY TIRUCHANOOR TIRUPATI CHITTOORDT ANDHRA PRADESH	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"PHARMACY PRACTICE	"},
        {aicte_id:"1-2814148287",institute_name:"SRI VENKATESWARA COLLEGE OF ENGINEERING AND TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"PHARMACY PRACTICE"},
         {aicte_id:"1-2814148287",institute_name:"SRI VENKATESWARA COLLEGE OF ENGINEERING AND TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"COMPUTER ENGINEERING	"},
         {aicte_id:"1-2814148287",institute_name:"1-912922",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"INFORMATION TECHNOLOGY	"},
        {aicte_id:"1-2814148094",institute_name:"SRI VENKATESWARA COLLEGE OF ENGINEERING AND TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"INFORMATION TECHNOLOGY	"},
         {aicte_id:"1-2814148028",institute_name:"V.K.R V.N.B POLYTECHNIC	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"INFORMATION TECHNOLOGY	"},
         {aicte_id:"1-2814148287",institute_name:"CHHATRAPATI SHIVAJI INSTITUTE OF TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"POST GRADUATE DIPLOMA IN MANAGEMENT	"},
        {aicte_id:"1-2814148098",institute_name:"CHHATRAPATI SHIVAJI INSTITUTE OF TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"POST GRADUATE DIPLOMA IN MANAGEMENT	"},
         {aicte_id:"1-2814148728",institute_name:"LAKHMI CHAND INSTITUTE OF TECHNOLOGY	",institute_type:"noida",State:"Uttar Pradesh",district:"abd",university:"angs",level:"kjsk",course:"CIVIL ENGINEERING	"},
        
        
    ];
    $scope.mytable = mytable;
});