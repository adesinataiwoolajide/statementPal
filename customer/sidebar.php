<aside id="main-sidebar" class="dt-sidebar">
    <div class="dt-sidebar__container">

        <!-- Sidebar Navigation -->
        <ul class="dt-side-nav">

            <!-- Menu Header -->
            <li class="dt-side-nav__item dt-side-nav__header">
                <span class="dt-side-nav__text">STATEMENT PAL</span>
            </li>

            <li class="dt-side-nav__item">
                <a href="./" class="dt-side-nav__link" title="Metrics">
                    <i class="icon icon-dashboard icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Homepage</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="accounts.php" class="dt-side-nav__link" title="Layouts">
                    <i class="icon icon-user icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Accounts </span>
                    <small class="badge float-right badge-primary"><?php echo $statement->getCountAccount($customerid); ?></small>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="transactions.php" class="dt-side-nav__link" title="Layouts">
                    <i class="icon icon-layout icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Transactions</span> 
                    <small class="badge float-right badge-primary">
                    <?php echo $statement->getAccountTransctions($customerid); ?>
                    </small> 
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="statements.php" class="dt-side-nav__link" title="Layouts">
                    <i class="icon icon-layout icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Statements</span>
                    <small class="badge float-right badge-primary"><?php echo $statement->getCountSingleStatement($account_number); ?></small>
                </a>
            </li>
           
            <li class="dt-side-nav__item">
                <a href="../log-out.php" class="dt-side-nav__link" title="Layouts">
                    <i class="icon icon-users icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Log Out</span>
                </a>
            </li>
            <!-- /menu item -->

           
            <!-- /menu item -->

        </ul>
        <!-- /sidebar navigation -->

    </div>
</aside>