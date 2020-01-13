

<?php echo __DIR__;  ?>


{ for user in users }

    <a href=""> <h1> {{ user.u_name }} </h1></a>


{ endfor }