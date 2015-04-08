var chamadosApp = angular.module('chamadosApp', []);

chamadosApp.controller('MainCtrl', function MainCtrl($scope){
	$scope.lista = [
		{"chamado": "#1", "solicitado_por": "Junior", "data_hora": "06/04/2015 às 10:03", "descricao": "Teste de Chamado1", "status": "Ok", "feedback": "Resolvido"},
		{"chamado": "#2", "solicitado_por": "Junior", "data_hora": "06/04/2015 às 10:04", "descricao": "Teste de Chamado2", "status": "Ok", "feedback": "Resolvido"},
		{"chamado": "#3", "solicitado_por": "Diego", "data_hora": "06/04/2015 às 10:05", "descricao": "Teste de Chamado3", "status": "Ok", "feedback": "Pendente"}
	];

	var init = function(){

	};

	init();
});