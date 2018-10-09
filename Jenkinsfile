repositoryUrl = "https://github.com/devheolys/symfony_web.git"
branch = "master"

pipeline {
    agent any 

    stages {
        stage('Clone sources') {
           steps {
                sh 'cd /var/www/html/symfony_web/' 
                sh 'git pull origin develop'
        }
	}
	stage(' Deploy') {
	   steps{
	sh 'sudo php app/console fos:js-routing:dump --target web/static/js/fos_js_routes.js'
	sh 'sudo php app/console bazinga:js-translation:dump web/js'
	sh 'sudo php app/console assetic:dump  web/static --env=prod --no-debug'
	sh 'sudo php app/console assets:install web/static --env=prod --no-debug'
	sh 'sudo php app/console doctrine:schema:update --force'
	sh 'sudo php app/console cache:clear --env=prod --no-warmup'
	sh 'sudo chown -R www-data.www-data . '
        sh 'sudo chown -R dev.dev .git'
        sh 'sudo service nginx reload' 	
		}
	}
        }
        }
