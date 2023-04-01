<nav>
    <label class="logo">Art Gallery</label>
    <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Cart</a></li>
        <li><a href="#">Paintings <i class="fas fa-caret-down"></i>
            </a>
            <ul>
                <li><a href="paints.php?q=abstract">Abstract</a></li>
                <li><a href="paints.php?q=landscape">Landscape</a></li>
                <li><a href="paints.php?q=sculpture">Monochrome</a></li>
            </ul>
        </li>
        <li><a href="#">Contact</a></li>
    </ul>

    <div class="search-icon">
        <span class="fas fa-search"></span>
    </div>
    <div class="cancel-icon">
        <span class="fas fa-times"></span>
    </div>
    <form action="paints.php" method="post">
        <input name="search" type="search" class="search-data" placeholder="Search" required>
        <button type="submit" class="fas fa-search"></button>
    </form>
</nav>
<div class="content">
    <div class="space text">
        Quality and Affordable Art For All
    </div>
</div>