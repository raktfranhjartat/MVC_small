<?php

class BaseController 
{
    protected function renderView(string $view, array $data = [], string $layout = 'app')
    {
        extract($data, EXTR_SKIP);

        $layoutFile = __DIR__ . "/../layouts/{$layout}.layout.php";
        $viewFile   = __DIR__ . "/../views/{$view}.view.php";

        if (!file_exists($viewFile)) {
            echo "<p>Vyn '{$view}' saknas.</p>";
            return;
        }

        require $layoutFile;
    }

        protected function redirect(string $url, array $flash = []): void
    {
        if ($flash) {
            $_SESSION['flash'] = $flash;
        }

        if (!headers_sent()) {
            header('Location: ' . $url);
        }

        exit;
    }
}