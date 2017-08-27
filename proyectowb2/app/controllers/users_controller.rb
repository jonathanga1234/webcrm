class UsersController < ApplicationController
  
  def index
   
    user = User.all
    render(json: user.to_json)
  end





  def create

    user = User.new

    user.nombre = params[:nombre]



    #  clave =Digest::MD5.hexdigest(params[:clave])



    user.clave =params[:clave]
    user.tipo = params[:tipo]

    user.save

    render(json: user,status: 201 ,location: user)
  end



  def show


user = User.find(params[:id])
render json: user,status: 200
end

end
