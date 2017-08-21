class TicketsController < ApplicationController


 def index
    # get all clients from the database
    all_Ticket = Ticket.all
    render(json: all_Ticket.to_json)
  end

  def create

    ticket = Ticket.new

    ticket.titulo  = params[:titulo]
    ticket.detalle   = params[:detalle]
    ticket.quien_reporto  = params[:quien_reporto]
        ticket.cliente    = params[:cliente ]
            ticket.estado   = params[:estado]

          

    ticket.save
  end

  # PATCH/PUT /tickets/1
  # PATCH/PUT /tickets/1.json
  def update
    respond_to do |format|
      if @ticket.update(ticket_params)
        format.html { redirect_to @ticket, notice: 'Ticket was successfully updated.' }
        format.json { render :show, status: :ok, location: @ticket }
      else
        format.html { render :edit }
        format.json { render json: @ticket.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /tickets/1
  # DELETE /tickets/1.json
  def destroy
    @ticket.destroy
    respond_to do |format|
      format.html { redirect_to tickets_url, notice: 'Ticket was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_ticket
      @ticket = Ticket.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def ticket_params
      params.require(:ticket).permit(:titulo, :detalle, :quien_reporto, :cliente, :estado)
    end
end
