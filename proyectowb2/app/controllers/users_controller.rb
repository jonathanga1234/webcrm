class UsersController < ApplicationController
  ##muestrra todos los datos
  def index
   
    user = User.all
    render(json: user.to_json)
  end



##crea losdatos

  def create

    user = User.new

    user.nombre = params[:nombre]

   user.clave =params[:clave]
    user.tipo = params[:tipo]





if user.save
  

    render(json: user,status: 201 ,location: user)
  else

  render(json: user.errors,status: 422 )

end
    
  end

#elimina datos
  
   def destroy


user = User.find(params[:id])

if user.destroy



 head 204


  else
 
 head 422


 end
 end
##actualiza datos
def update
user = User.find(params[:id])


    user.nombre = params[:nombre] ? params[:nombre] : user.nombre

   user.clave =params[:clave] ? params[:clave] : user.clave
    user.tipo = params[:tipo] ? params[:tipo] : user.tipo



if user.save()



  render(json: user,status: 201 )
  else

 render(json: user.errors,status: 422 )
    end

  end
##muestra un datos

  def show


user = User.find(params[:id])
render json: user,status: 200
end

end
