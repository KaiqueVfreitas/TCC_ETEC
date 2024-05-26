using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace formsTCM
{
    public class frmInicio
    {
        private System.Windows.Forms.Button btnCadProduto;
        private System.Windows.Forms.Button btnConsultar;
        private System.Windows.Forms.Button btnCadPessoa;
        private System.Windows.Forms.PictureBox pctSelecaoPag;

        private void InitializeComponent()
        {
            this.pctSelecaoPag = new System.Windows.Forms.PictureBox();
            this.btnCadProduto = new System.Windows.Forms.Button();
            this.btnConsultar = new System.Windows.Forms.Button();
            this.btnCadPessoa = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.pctSelecaoPag)).BeginInit();
            this.SuspendLayout();
            // 
            // pctSelecaoPag
            // 
            this.pctSelecaoPag.Location = new System.Drawing.Point(0, -1);
            this.pctSelecaoPag.Name = "pctSelecaoPag";
            this.pctSelecaoPag.Size = new System.Drawing.Size(120, 410);
            this.pctSelecaoPag.TabIndex = 0;
            this.pctSelecaoPag.TabStop = false;
            this.pctSelecaoPag.Click += new System.EventHandler(this.pictureBox1_Click);
            // 
            // btnCadProduto
            // 
            this.btnCadProduto.Font = new System.Drawing.Font("Microsoft Sans Serif", 6F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCadProduto.Location = new System.Drawing.Point(12, 223);
            this.btnCadProduto.Name = "btnCadProduto";
            this.btnCadProduto.Size = new System.Drawing.Size(90, 50);
            this.btnCadProduto.TabIndex = 1;
            this.btnCadProduto.Text = "CADASTRAR PRODUTO";
            this.btnCadProduto.UseVisualStyleBackColor = true;
            // 
            // btnConsultar
            // 
            this.btnConsultar.Font = new System.Drawing.Font("Microsoft Sans Serif", 6F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnConsultar.Location = new System.Drawing.Point(12, 335);
            this.btnConsultar.Name = "btnConsultar";
            this.btnConsultar.Size = new System.Drawing.Size(90, 50);
            this.btnConsultar.TabIndex = 2;
            this.btnConsultar.Text = "CONSULTAR";
            this.btnConsultar.UseVisualStyleBackColor = true;
            // 
            // btnCadPessoa
            // 
            this.btnCadPessoa.Font = new System.Drawing.Font("Microsoft Sans Serif", 6F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCadPessoa.Location = new System.Drawing.Point(12, 279);
            this.btnCadPessoa.Name = "btnCadPessoa";
            this.btnCadPessoa.Size = new System.Drawing.Size(90, 50);
            this.btnCadPessoa.TabIndex = 3;
            this.btnCadPessoa.Text = "CADASTRAR PESSOA";
            this.btnCadPessoa.UseVisualStyleBackColor = true;
            // 
            // frmInicio
            // 
            this.ClientSize = new System.Drawing.Size(582, 403);
            this.Controls.Add(this.btnCadPessoa);
            this.Controls.Add(this.btnConsultar);
            this.Controls.Add(this.btnCadProduto);
            this.Controls.Add(this.pctSelecaoPag);
            this.Name = "frmInicio";
            this.Text = "INICIO";
            ((System.ComponentModel.ISupportInitialize)(this.pctSelecaoPag)).EndInit();
            this.ResumeLayout(false);

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }
    }
}
