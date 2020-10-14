<?php

namespace wecomstore;

use think\Config;
use think\Route;
use think\Service;

class ImageService extends Service {
    public function boot() {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/image', function (Config $config) {
                $data              = $config->get('extra.product', []);
                $data['conposer']  = 'Image';
                $data['statement'] = base64_decode('V2Vjb21TdG9yZSDllYbln47moYbmnrbns7vnu58=');

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
