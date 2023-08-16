<?php 
    $this->fileLayout = "Layout.php";
 ?>
 <div class="col-md-12"> 
    <div class="panel panel-primary" style="border-color: #ae7b4e !important; border-radius: 5px;">
        <div class="panel-heading" style="background-color: #ae7b4e; border-color: #ae7b4e;">Add edit category</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <select name="parent_id">
                        <option value="0"></option>
                        <?php 
                            $categories = $this->modelCategories();
                         ?>
                         <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->parent_id)&&$record->parent_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn" style="background-color: #ae7b4e; color: white">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>