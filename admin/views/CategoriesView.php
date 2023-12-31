<?php 
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn" style="background: #ae7b4e; color: white;"><i style="margin-right: 6px;" class="fas fa-plus"></i>Add category</a>
    </div>
    <div class="panel panel-primary" style="border-color: #ae7b4e !important; border-radius: 5px;">
        <div class="panel-heading" style="background-color: #ae7b4e; border-color: #ae7b4e;">List User</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Fullname</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach ($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>"><i style="color: #ae7b4e;" class="fas fa-edit"></i></a>&nbsp;
                        <a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i style="color: #ae7b4e;" class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php 
                    $categoriesSub = $this->modelCategoriesSub($rows->id);
                 ?>
                 <?php foreach($categoriesSub as $rowsSub): ?>
                    <tr>
                        <td style="padding-left:20px;"><?php echo $rowsSub->name; ?></td>
                        <td style="text-align:center;">
                            <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>"><i style="color: #ae7b4e;" class="fas fa-edit"></i></a>&nbsp;
                            <a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');"><i style="color: #ae7b4e;" class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                 <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a style="color: #ae7b4e;" href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a style="color: #ae7b4e;" href="index.php?controller=categories&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>