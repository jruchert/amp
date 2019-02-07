
</main>
<footer>
    <p>&copy; <?php echo date('Y'); ?> My Simple Database</p>
</footer>

<?php 
            echo "Exisiting Users <br>";
            foreach ($usernames as $value) {
              echo $value["username"] . "<br>";
              }?>

</body>
</html>