class SessionsController < ApplicationController
require 'digest/md5'
  # POST /sessions
  # POST /sessions.json
  def create


byebug
    # ver si la secion existe en base de datos

nombre=session_params[:nombre]

clave =Digest::MD5.hexdigest(clave)

User.where(nombre:nombre,clave:clave).first

if User


#generar token
token =Digest::MD5.hexdigest(nombre)

#crear seccion#

session =session.new(token:token)

seccion.user=user

if seccion.save
render "token:#{token}", status: :created
   

   end
  end

  end

  # PATCH/PUT /sessions/1
  # PATCH/PUT /sessions/1.json


  # DELETE /sessions/1
  # DELETE /sessions/1.json
  def destroy
    @session.destroy
    respond_to do |format|
      format.html { redirect_to sessions_url, notice: 'Session was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_session
      @session = Session.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def session_params
      params.permit(:nombre, :clave)
    end
end
