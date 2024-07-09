<?php
PREPARE statement FROM "INSERT INTO classics VALUES (?, ?, ?, ?, ?)";

SET @author = "Emily Bronte",
    @title = "Wuthering Heights",
    @category = "Classic Fiction",
    @year = "1847",
    @isbn = "9780553212587";

    EXECUTE staement USING @author, @title, @category, @year, @isbn;

DEALLOCATE PREPARE statement;
