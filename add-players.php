<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/add-player.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

  
</head>
<body>
    <div class="player-box-container">
        <div class="player-box">
            <form>
                <center><h1>ADD NEW PLAYER</h1><center>
                <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Full Name</label>
                </div>
                <!-- <div class="user-box">
                    <input type="text" name="" required="">
                    <label>Password</label>
                </div> -->
                <div class="user-box">
                    <select name="team" id="team" class="team">
                        <option value=""></option>
                        <option value="0">Spade</option>
                        <option value="1">Heart</option>
                        <option value="2">Club</option>
                        <option value="3">Diamond</option>
                    </select>
                    <label>Team</label>
                </div>
                <center>
                <a href="#">
                        SEND
                    <span></span>
                </a></center>
            </form>
        </div>
    </div>
    <div class="player-table-container">
        <div class="player-table">
            <table class="player-list-table" id="player-list-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Team</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>hehe</td>
                        <td>gege</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $('#player-list-table').DataTable();
    } );
</script>
</html>