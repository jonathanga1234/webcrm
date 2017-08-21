class CreateReuniones < ActiveRecord::Migration[5.1]
  def change
    create_table :reuniones do |t|
      t.string :titulo
      t.string :diayhora
      t.string :usuario
      t.string :virtual
      t.string :cliente

      t.timestamps
    end
  end
end
