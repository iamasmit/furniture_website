

<?php
$conn = mysqli_connect("localhost","root","","aayush");
$query= "SELECT * FROM contact";
$query_run = mysqli_query($conn,$query);


?>
<style>
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:blue;
}
td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{
        color:red;
        text-align:center;
    }
    </style>
    <h1>Contact Message</h1>
<table class="table">
<thead>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Message</th>
            <th>Country</th>
           
            <th>Date</th>


        </tr>
    </thead>
    <tbody>
    <?php
        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>
                 <tr>
                    <td><?php echo $row['S.N'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['country'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['date'];?></td>
            </tr>
            <?php
            }

        }
        else{
            ?>
            <tr>
                <td>No Records Available</td>
            </tr>
        <?php
        }
        ?>
</tbody>
</table>