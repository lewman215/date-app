<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin Content
                <small>Subheading</small>
            </h1>

            <?php
                $users = User::find_all_users();
                $json = User::object_to_json($users);
                var_dump($json);
                echo "Here is a list of all the users:" . " <br/>";
                foreach($users as $user) {
                    echo $user->print_details();
                }
                echo "Here is a user found by id (1)" . "<br/>";
                $user = User::find_user(1);
                echo $user->print_details();

                // $json = User::object_to_json($users);
                // var_dump($json);
            ?>


            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
</div>
