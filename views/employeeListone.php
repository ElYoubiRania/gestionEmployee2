<?php
function fAge($date) {
  $datetime1 = new DateTime("today");
  $datetime2 = new DateTime($date);
  $interval = $datetime2->diff($datetime1);
  return $interval->format('%y');
  }  ?>
<main role="main" class="container">
    <div class="starter-template">
      <h1>Employee Selected :</h1>
    </div>
  <br/>
  <div class="row">
    <h3>
      <?php
       if (isset($e->EmployeeID)) echo '('.$e->EmployeeID.') '; ?>
      <?php if (isset($e->CTitle)) echo $e->CTitle.' '; ?>
      <?php if (isset($e->FirstName)) echo $e->FirstName.' '; ?>
      <?php if (isset($e->LastName)) echo $e->LastName.' '; ?>
     </h3>
  </div>

  <div class="row">
    <label class="col-md-4 control-label">NationalIDNumber :</label>
    <div class="col-md-8">
      <?php if (isset($e->NationalIDNumber)) echo $e->NationalIDNumber; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">LoginID :</label>
    <div class="col-md-8">
      <?php if (isset($e->LoginID)) echo $e->LoginID; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">BirthDate :</label>
    <div class="col-md-8">
      <?php if (isset($e->BirthDate)) echo date('d/m/Y',strtotime($e->BirthDate)). ' ('.fAge($e->BirthDate).' ans)'; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">HireDate :</label>
    <div class="col-md-8">
      <?php if (isset($e->HireDate)) echo date('d/m/Y',strtotime($e->HireDate)). ' ('.fAge($e->HireDate).' ans d\'ancienneté)'; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">MaritalStatus :</label>
    <div class="col-md-8">
      <?php if (isset($e->MaritalStatus)) echo $e->MaritalStatus; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Gender :</label>
    <div class="col-md-8">
      <?php if (isset($e->Gender)) echo $e->Gender; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">VacationHours :</label>
    <div class="col-md-8">
      <?php if (isset($e->VacationHours)) echo $e->VacationHours; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">SickLeaveHours :</label>
    <div class="col-md-8">
      <?php if (isset($e->SickLeaveHours)) echo $e->SickLeaveHours; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">EmailAddress :</label>
    <div class="col-md-8">
      <?php if (isset($e->EmailAddress)) echo $e->EmailAddress; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">EmailPromotion :</label>
    <div class="col-md-8">
      <?php if (isset($e->EmailPromotion)) echo $e->EmailPromotion; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Phone :</label>
    <div class="col-md-8">
      <?php if (isset($e->Phone)) echo $e->Phone; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">ETitle :</label>
    <div class="col-md-8">
      <?php if (isset($e->ETitle)) echo $e->ETitle; ?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Manager :</label>
    <div class="col-md-8">
      <?php if (isset($e->CMTitle)) echo $e->CMTitle; ?>
      <?php if (isset($e->CMFirstName)) echo ' '.$e->CMFirstName; ?>
      <?php if (isset($e->CMMiddleName)) echo ' '.$e->CMMiddleName; ?>
      <?php if (isset($e->CMLastName)) echo ' '.$e->CMLastName; ?>
      <?php if (isset($e->EMTitle)) echo ' ('.$e->EMTitle.')'; ?>
      <?php if (isset($e->ManagerID)) echo ' <a href="router.php?c=employee&m=listone&id='.$e->ManagerID.'
      " class="btn btn-success btn-sm" data-toggle="tooltip" title="Modifier l\'employé"><i class="fas fa-eye"></i> Voir</a>';?>
    </div>
  </div>
  <div class="row">
    <label class="col-md-4 control-label">Dernière modification :</label>
    <div class="col-md-8">
      <?php if (isset($e->ModifiedDate)) echo $e->ModifiedDate; ?>
    </div>
  </div>

</main><!-- /.container -->