<?php
class employeeController{
    public function construct(){}

    public function index(){

    }    
    public function list(){
        require_once MODELS.DS."employeeModel.php";
        $employeeModel =new employeeModel();
        $list=$employeeModel->list();
        require_once CLASSES.DS.'renderView.php';
        $v=new renderView();
        $v->setVar('employeelist',$list);
        $v->render('employee','list');
    }
    public function listone($id){
        require_once MODELS.DS.'employeeModel.php';
        $employeeModel =new employeeModel();
        require_once CLASSES.DS.'renderView.php';
        $v=new renderView();
        if ($employee=$employeeModel->listone($id)) $v->setVar('e',$employee);
        // Affichage au sein de la vue des données récupérées via le model
        $v->render('employee','listone');
        
    }

    public function add(){
        // $EmployeeID, $NationalIDNumber, $ContactID,$Title, $BirthDate, $Gender, $HireDate
        require_once CLASSES.DS.'renderView.php';
        $v=new renderView();      
        if (isset($_POST["EmployeeID"]))
        {
            require_once MODELS.DS."employeeModel.php";
            $employeeModel =new employeeModel();
            if ($employeeModel->add($_POST["EmployeeID"], $_POST["ContactID"], $_POST["NationalIDNumber"], $_POST["Title"], $_POST["BirthDate"],$_POST["Gender"],$_POST["HireDate"]))
            {
                $v->render('home','index');
            }
        }
        else       
        $v->render('employee','add');
    }
    public function edit($id){
        require_once MODELS.DS.'employeeModel.php';
        $employeeModel =new employeeModel();
        $employee=$employeeModel->listone($id);
        require_once CLASSES.DS.'renderView.php';
        $v=new renderView();
        if (isset($_POST["EmployeeID"]))
        {
                if($employeeModel->edit($_POST["EmployeeID"], $_POST["ContactID"],$_POST["NationalIDNumber"], $_POST["Title"], $_POST["BirthDate"],$_POST["Gender"],$_POST["HireDate"]))
                {
                    return $this->list();
                }
        }
        else 
        $v->setVar('employee',$employee);
        $v->render('employee','edit');
    }
    public function delete($id){
        require_once MODELS.DS.'employeeModel.php';
        $employeeModel =new employeeModel();
        if($employeeModel->delete($id))
        {
            return $this->list();
        }
    }

}
?>