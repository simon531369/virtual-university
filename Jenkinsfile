
node('slave') {
       
        stage('maven_compile'){
			sh label: '', script: 'mvn compile'
		}
			
		stage('maven_test'){
			sh label: '', script: 'mvn test'
		}
        stage('maven_deploy'){
			sh label: '', script: 'mvn test'
		}
	

}
