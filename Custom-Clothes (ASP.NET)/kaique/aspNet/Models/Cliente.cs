namespace CustomClothing.Models
{
        public class Cliente
        {//criando o encapsulamento DO OBJETO COM GET E SET
            public int Id { get; set; }
            public string? Nome { get; set; }       
            public string? Email { get; set; }

            public List<Cliente>? ListaCliente { get; set; }

        }
    

}

