YUI.add('moodle-theme_klassroom-positionChanger', function(Y) {
	var positionChanger = function() {
		positionChanger.superclass.constructor.apply(this, arguments);
	};
	
	//this function runs for changing the current position of menus
	positionChanger.prototype = {
		initializer : function (config){
			Y.all('.iconcursor').on('click', this.changePos, this, this.title);
		},
		changePos : function (e, arrow){ 
			//this is very poor style if there is a changes in dom order then there will be problem
			// MenuContainer is current menu container on which menu the user did click
			
			var currMenuNode = Y.one(e.currentTarget._node);
			//alert(currMenuNode);
			var divNode = currMenuNode.get('parentNode.parentNode');
			//alert(divNode);
			
			
			var currMenuLabel = divNode.previous();
			//alert(currMenuLabel);
			var menuContainer = divNode.get('parentNode');
	
			var MenuContLSib = menuContainer.previous();
			var MenuContRSib = menuContainer.next();
			
			if(hasMenuContSib(MenuContLSib) && hasMenuContSib(MenuContRSib)){
				var arrow = e.currentTarget._node.id; 
				//alert(arrow);
				if(arrow == 'rightarr'){
					toogleMenuNode(MenuContRSib, menuContainer, currMenuLabel);	
				}else if(arrow == 'leftarr'){
					toogleMenuNode(MenuContLSib, menuContainer, currMenuLabel);
				}
			}else if(hasMenuContSib(MenuContRSib)){
				toogleMenuNode(MenuContRSib, menuContainer, currMenuLabel);	
			}else if(hasMenuContSib(MenuContLSib)){
				toogleMenuNode(MenuContLSib, menuContainer, currMenuLabel);
			}
		}
	}
	
	/*
	 * 	through this function the position of menus would be altered
	 *  @param Node MenuContSib is the sibling of menuContainer
	 *  @param Node menuContainer is current menu
	 *  @param Node currMenuLabel is label of current Menu eg: site administration or navigation   
	 */
	function toogleMenuNode(MenuContSib, menuContainer, currMenuLabel){
		var allChildrens = MenuContSib.get('children');
		//alert(allChildrens);
		var sibChildLabel =  allChildrens._nodes[0];
		//alert(sibChildLabel);
		Y.one(sibChildLabel).replace(currMenuLabel);
		menuContainer.prepend(Y.one(sibChildLabel));
		var currentInputName  = 	Y.one(menuContainer).one('input').get('name');
		//alert(currentInputName);
		var sibInputName = Y.one(MenuContSib).one('input').get('name');
		//alert(sibInputName);
		Y.one(menuContainer).one('input').set('name', sibInputName);
		Y.one(MenuContSib).one('input').set('name', currentInputName);
	}
	
	/* checking that menu container existing or not
	 * @param Node sibMenuContainer is particular menu eg:- site admin menu 
	 * return true at sucess otherwise false	
	 */ 
	function hasMenuContSib(sibMenuContainer){
		//this is critical
		if(sibMenuContainer !=  null){
			/*if(sibMenuContainer.get('className') == 'form-item clearfix'){
				return true;
			}else{
				return false;
			}*/
			return ((sibMenuContainer.get('className') == 'form-item clearfix') ? true : false);
			
		}else{
			return false;
		}
	}
	
	Y.extend(positionChanger, Y.Base, positionChanger.prototype, {
	    NAME  : 'klassroom',
	    ATTRS : {
	        colour : {
	            value : 'red'
	        }
	    }
	});
	
	M.theme_klassroom = M.theme_klassroom || {};
	
	M.theme_klassroom.initPositionChanger = function (cfg){
		return new positionChanger(cfg);
	} 

}, '@VERSION@', {requires:['base','node']});
