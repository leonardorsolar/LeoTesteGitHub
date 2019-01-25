<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"/>
     <title>Document</title>
 </head>
 <body>
     <!-- Conteúdo -->

        <h1>Users</h1>

        <ul>
        <?php foreach ($users as $user): ?>
        <li><?php echo $user->name;?></li>
        <?php endforeach; ?>
        </ul>


 </body>
 </html>