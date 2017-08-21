class CreateContactos < ActiveRecord::Migration[5.1]
  def change
    create_table :contactos do |t|
      t.string :cliente
      t.string :nombre
      t.string :apellidos
      t.string :correo
      t.string :numero
      t.string :puesto

      t.timestamps
    end
  end
end
