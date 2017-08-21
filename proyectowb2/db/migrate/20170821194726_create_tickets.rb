class CreateTickets < ActiveRecord::Migration[5.1]
  def change
    create_table :tickets do |t|
      t.string :titulo
      t.string :detalle
      t.string :quien_reporto
      t.string :cliente
      t.string :estado

      t.timestamps
    end
  end
end
