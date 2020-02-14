<h1>Edit Employee</h1>
<form method='post' action='' style="margin-left:20%;width:50%;height:40%">
    <div class="form-group">

        <label for="title">EmployeeID</label>
        <input type="text" class="form-control" id="EmployeeID"  name="EmployeeID" 
        value="<?php if(isset($employee->EmployeeID)) echo $employee->EmployeeID ?>">
        <label for="description">ContactID</label>
        <input type="text" class="form-control" id="ContactID" placeholder="Add ContactID" name="ContactID" value="<?php if(isset($employee->ContactID)) echo $employee->ContactID ?>">

        <label for="description">NationalIDNumber</label>
        <input type="text" class="form-control" id="NationalIDNumber" placeholder="Add National IDNumber" name="NationalIDNumber" value="<?php if(isset($employee->NationalIDNumber)) echo $employee->NationalIDNumber?>">

        <label for="description">Title</label>
        <input type="text" class="form-control" id="Title" placeholder="Add Title" name="Title"
         value="<?php if(isset($employee->ETitle)) echo $employee->ETitle ?>">

        <label for="description">BirthDate</label>
        <input type="text" class="form-control" id="BirthDate" placeholder="Add BirthDate" name="BirthDate" 
        value="<?php if(isset($employee->BirthDate)) echo $employee->BirthDate ?>">

        <label for="description">Gender</label>
        <input type="text" class="form-control" id="Gender" placeholder="Add Gender" name="Gender" value="<?php if(isset($employee->Gender)) echo $employee->Gender ?>">

        <label for="description">HireDate</label>
        <input type="text" class="form-control" id="HireDate" placeholder="Add HireDate" name="HireDate" value="<?php if(isset($employee->HireDate)) echo $employee->HireDate ?>">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>