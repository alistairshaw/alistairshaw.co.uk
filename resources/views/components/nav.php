<ul>
    <?php if (!isset($exclude_home) || !$exclude_home): ?>
        <li<?php if (isset($navSelected) && $navSelected == 'home') echo ' class="active"'; ?>><a href="/">Home</a></li>
    <?php endif; ?>
    <li<?php if (isset($navSelected) && $navSelected == 'home') echo ' class="active"'; ?>><a href="/projects">Projects</a></li>
    <li<?php if (isset($navSelected) && $navSelected == 'home') echo ' class="active"'; ?>><a href="/tech">Skills</a></li>
</ul>