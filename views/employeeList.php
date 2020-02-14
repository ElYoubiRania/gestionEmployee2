<main role="main" class="container">
    <div class="starter-template">
      <h1>List of employees</h1><br>
    </div>
    <a href="router.php?c=employee&m=add" class="btn btn-primary btn-xs pull-right">
        <b>+</b>Add new employee</a>
        <br><br>
  <div class="row">
    <table class="table table-sm table-striped table-bordered">
    <thead>
      <tr class="btn-info">
        <th scope="col">EmployeeID</th>
        <th scope="col">ContactID</th>
        <th scope="col">NationalIDNumber</th>
        <th scope="col">CTitle</th>
        <th scope="col">LastName</th>
        <th scope="col">FirstName</th>
        <th scope="col">ETitle</th>
        <th scope="col">HireDate</th>
        <th scope="col">Mail</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
    <?php foreach ($employeelist as $e){ ?>
      <tr>
        <td><?php if (isset($e->EmployeeID)) echo $e->EmployeeID; ?></td>
        <td><?php if (isset($e->ContactID)) echo $e->ContactID; ?></td>
        <td><?php if (isset($e->NationalIDNumber)) echo $e->NationalIDNumber; ?></td>
        <td><?php if (isset($e->CTitle)) echo $e->CTitle; ?></td>
        <td><?php if (isset($e->LastName)) echo $e->LastName; ?></td>
        <td><?php if (isset($e->FirstName)) echo $e->FirstName; ?></td>
        <td><?php if (isset($e->ETitle)) echo $e->ETitle; ?></td>
        <td><?php if (isset($e->HireDate)) echo date('d/m/Y',strtotime($e->HireDate)); ?></td>
        <td><?php if (isset($e->EmailAddress)) echo $e->EmailAddress; ?></td>
        <td><?php if (isset($e->EmployeeID)) echo '<a href="router.php?c=employee&m=listone&id='.$e->EmployeeID.'
        " data-toggle="tooltip" title="Voir" ><i class="fas fa-info-circle"></i></a>';?>
        &nbsp;<?php if (isset($e->EmployeeID)) echo '<a href="router.php?c=employee&m=edit&id='.$e->EmployeeID.'" data-toggle="tooltip" title="Modifier"  ><i class="fas fa-user-edit"></i></a>';?>
        &nbsp;<?php if (isset($e->EmployeeID)) echo '<a href="router.php?c=employee&m=delete&id='.$e->EmployeeID.'" data-toggle="tooltip" title="Supprimer"  ><i class="fas fa-trash"></i></a>';?></td>
      </tr>
    <?php }?>
    </tbody>
    </table>
  </div>
</main><!-- /.container -->