var app = angular.module("myModule" , []).controller("mycontroller", function($scope){
     
    var mytable = [
        {College_Name:"University of Delhi ",Address:"School of Open Learning Campus of Open Learning, Delhi-110 007",DOI:"15.07.2015 ",Reco:"Recognition Letter"},
        {College_Name:"Institute of Management Technology ",Address:"A-16, Site-3, UPSIDC Industrial Area Meerut Road, Ghaziabad-201003 (UP",DOI:"26.06.2015",Reco:"Recognition Letter"},
         {College_Name:"Rashtriya Sanskrit Vidyapeetha ",Address:"Tirupati-517 507, Andhra Pradesh ",DOI:"26.06.2015 ",Reco:"Recognition Letter"},
        {College_Name:"Guru Jambheshwar University for Science and Technology ",Address:"Hisar-125 001, Haryana",DOI:"26.06.2015",Reco:"Recognition Letter"},
         {College_Name:"Netaji Subhash Open University ",Address:"DD-26, Sector-1, Salt Lake City, Kolkata- 700 064, West Bengal ",DOI:"26.06.2015 ",Reco:"Recognition Letter"},
        {College_Name:"TERI University ",Address:"10, Institutional Area, Vasant Kunj, New Delhi-110070 ",DOI:"26.06.2015",Reco:"Recognition Letter"},
         {College_Name:"Gandhi Institute of Technology and  Management (GITAM) ",Address:"Gandhi Nagar Campus, Rushikonda, Vishakapatnam, (AP)-530045 ",DOI:"15.07.2015 ",Reco:"Recognition Letter"},
        {College_Name:"UP Rajarshi Tondon Open University ",Address:"Shantipuram (Sector-F), Phaphamau, Allahabad (UP)- 211013 ",DOI:"15.07.2015",Reco:"Recognition Letter"},
         {College_Name:"Patna University ",Address:"Patna University Campus, Patna - 800005, Bihar  ",DOI:"15.07.2015 ",Reco:"Recognition Letter"},
        {College_Name:"The Institute of Chartered Financial Analysts of India University ",Address:"Kamalghat, Sadar, Tripura (West)- 792210 ",DOI:"15.07.2015 ",Reco:"Recognition Letter"},
         {College_Name:"Magadh University ",Address:"Bodh Gaya, Bihar-824234",DOI:"15.07.2015 ",Reco:"Recognition Letter"},
        {College_Name:"International Institute of Population Sciences ",Address:"Govandi Station Road, Deonar, Mumbai- 400088 ",DOI:"14.07.2015",Reco:"Recognition Letter"},
    ];
    $scope.mytable = mytable;
});