class CreateClientes < ActiveRecord::Migration[5.1]
  def change
    create_table :clientes do |t|
      t.string :nombre
      t.string :cedula
      t.string :pagina
      t.string :dirrecion
      t.string :telefono
      t.string :sector

      t.timestamps
    end
  end
end
