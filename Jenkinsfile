pipeline {
  agent any
  stages {
    stage('Build') {
      steps { 
      		sh 'cd E-commerce'
	      	sh 'vendor/bin/codecept run' 
      }
    }
  }
}