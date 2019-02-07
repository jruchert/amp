</main>
<footer>
    <p>&copy; <?php echo date('Y'); ?> My Guitar Shop, Inc.</p>
</footer>

<?php 
            echo "Exisiting Users <br>";
            foreach ($usernames as $value) {
              echo $value["username"] . "<br>";
              }?>

</body>
</html>