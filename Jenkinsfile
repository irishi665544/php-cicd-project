
pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('PHP Testing') {
            steps {
                sh 'php tests/test.php'
            }
        }

        stage('Docker Build') {
            steps {
                sh 'docker build -t php-cicd-app:${BUILD_NUMBER} .'
            }
        }

        stage('Deploy') {
            steps {
                sh '''
                    docker rm -f php-cicd-app || true
                    docker run -d \
                      --name php-cicd-app \
                      -p 8081:80 \
                      php-cicd-app:${BUILD_NUMBER}
                '''
            }
        }
    }
}
