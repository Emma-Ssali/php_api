<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel and Mysql DB Connection</title>
</head>
<body>
    <div>
        <?php
            use Illuminate\Support\Facades\DB;

            if(DB::connection()->getPdo()){
                echo "Successfully connected to DB named". DB::connection()->getDatabase();   
            }
        ?>
    </div>
</body>
</html>