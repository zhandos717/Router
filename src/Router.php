<?php
class Router{
    protected $routers= [];
    protected $route= [];
    protected  $page404 ='';

    public function __construct(string $page404)
    {
        $this->page404 = $page404; 
    }
    /**
     * Discriptions: Adding a route
     * @param string url 
     * @param string controller 
     * @param string action 
     */
    public function Add(string $url, string $file = 'index'):void
    {
        $url = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $url);
        $route = '#^' . $url . '$#';
        $this->routers[$route] = ['file' => $file];
    }
    private function match()
    {
        $url = explode('?', trim($_SERVER['REQUEST_URI'], '/'))[0];
        foreach ($this->routers as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }
                $this->route = $params;
                return true;
            }
        }
        return false;
    }
    public function run(){
        if ($this->match()) {
            if (file_exists($this->route['file'])) {
                    var_dump($this->route);
                    include $this->route['file'];
            } else {
                $eror = 'Нет такого файла';
                include $this->page404;
            }
        } else {
            $eror = 'Нет такого маршрута';
            include $this->page404;
        }
    }
}
