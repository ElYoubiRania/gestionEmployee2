<?php 
 class employeeModel{
    public function construct(){}
    //add employee or contact ??
    //add employee sachant que idcontact exist deja,id contact combobox ??
    public function add($EmployeeID, $NationalIDNumber, $ContactID,   
                         $Title, $BirthDate, $Gender, $HireDate)
    {
        $requete="INSERT INTO `employee` (`EmployeeID`, `NationalIDNumber`, `ContactID`,`Title`, `BirthDate`, `Gender`, `HireDate`)
         VALUES ('$EmployeeID', '$NationalIDNumber', '$ContactID', '$Title', '$BirthDate', '$Gender', '$HireDate')";
        //print_r($requete);
        try{
         $db=new pdo('mysql:host=localhost;dbname=adw;charset=utf8','root','');
         $resultat=$db->prepare($requete);    
        
         return $resultat->execute();
        }
        catch(PDOException $Ex)
        {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        } 
    
    }

    public function list()
    {
        $requete='select E.EmployeeID, C.ContactID, E.NationalIDNumber,E.Title as ETitle,
        C.Title as CTitle, C.FirstName, C.LastName, C.EmailAddress, E.HireDate
        from employee as E
        inner join contact as C 
        on E.ContactID=C.ContactID';
        try{
         $db=new pdo('mysql:host=localhost;dbname=adw;charset=utf8','root','');
         $resultat=$db->prepare($requete);
         $resultat->execute();
         return $resultat->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $Ex)
        {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
        
    }
    public function listone($id)
    {
        $requete='select E.*, C.*,E.Title as ETitle, C.Title as CTitle, EM.Title as EMTitle, CM.Title as CMTitle, 
        CM.FirstName as CMFirstName, CM.LastName as CMLastName
        from employee as E
        inner join contact as C on E.ContactID=C.ContactID
        left join employee as EM on E.ManagerID=EM.EmployeeID
        left join contact as CM on EM.ContactID=CM.ContactID
        where E.EmployeeID='.$id;
        try{
         $db=new pdo('mysql:host=localhost;dbname=adw;charset=utf8','root','');
         $resultat=$db->prepare($requete);
         $resultat->execute();
         return $resultat->fetch(PDO::FETCH_OBJ);
        }
        catch(PDOException $Ex)
        {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    }
    public function edit($EmployeeID, $NationalIDNumber, $ContactID,   
                         $Title, $BirthDate, $Gender, $HireDate)
    {
        $requete="update employee set  NationalIDNumber='".$NationalIDNumber."',ContactID= '".$ContactID."', Title='".$Title."', 
        BirthDate='".$BirthDate."', Gender='".$Gender."', HireDate='".$HireDate."' where EmployeeID=".$EmployeeID;
        //print_r($requete);

        try{
         $db=new pdo('mysql:host=localhost;dbname=adw;charset=utf8','root','');
         $resultat=$db->prepare($requete);        
         return $resultat->execute();
        }
        catch(PDOException $Ex)
        {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    }
    public function delete($id)
    {
        $requete='delete from employee where EmployeeID='.$id;
        try{
         $db=new pdo('mysql:host=localhost;dbname=adw;charset=utf8','root','');
         $resultat=$db->prepare($requete);        
         return $resultat->execute();
        }
        catch(PDOException $Ex)
        {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    }

}

?>