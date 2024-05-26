namespace formsTCM
{
    partial class frmCadProdutos
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnCadPessoa = new System.Windows.Forms.Button();
            this.btnConsultar = new System.Windows.Forms.Button();
            this.btnCadProduto = new System.Windows.Forms.Button();
            this.pctSelecaoPag = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.pctSelecaoPag)).BeginInit();
            this.SuspendLayout();
            // 
            // btnCadPessoa
            // 
            this.btnCadPessoa.Font = new System.Drawing.Font("Microsoft Sans Serif", 6F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCadPessoa.Location = new System.Drawing.Point(11, 278);
            this.btnCadPessoa.Name = "btnCadPessoa";
            this.btnCadPessoa.Size = new System.Drawing.Size(90, 50);
            this.btnCadPessoa.TabIndex = 7;
            this.btnCadPessoa.Text = "CADASTRAR PESSOA";
            this.btnCadPessoa.UseVisualStyleBackColor = true;
            // 
            // btnConsultar
            // 
            this.btnConsultar.Font = new System.Drawing.Font("Microsoft Sans Serif", 6F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnConsultar.Location = new System.Drawing.Point(11, 334);
            this.btnConsultar.Name = "btnConsultar";
            this.btnConsultar.Size = new System.Drawing.Size(90, 50);
            this.btnConsultar.TabIndex = 6;
            this.btnConsultar.Text = "CONSULTAR";
            this.btnConsultar.UseVisualStyleBackColor = true;
            // 
            // btnCadProduto
            // 
            this.btnCadProduto.Font = new System.Drawing.Font("Microsoft Sans Serif", 6F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCadProduto.Location = new System.Drawing.Point(11, 222);
            this.btnCadProduto.Name = "btnCadProduto";
            this.btnCadProduto.Size = new System.Drawing.Size(90, 50);
            this.btnCadProduto.TabIndex = 5;
            this.btnCadProduto.Text = "INÍCIO";
            this.btnCadProduto.UseVisualStyleBackColor = true;
            // 
            // pctSelecaoPag
            // 
            this.pctSelecaoPag.Location = new System.Drawing.Point(-1, -2);
            this.pctSelecaoPag.Name = "pctSelecaoPag";
            this.pctSelecaoPag.Size = new System.Drawing.Size(120, 410);
            this.pctSelecaoPag.TabIndex = 4;
            this.pctSelecaoPag.TabStop = false;
            // 
            // frmCadProdutos
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(582, 403);
            this.Controls.Add(this.btnCadPessoa);
            this.Controls.Add(this.btnConsultar);
            this.Controls.Add(this.btnCadProduto);
            this.Controls.Add(this.pctSelecaoPag);
            this.Name = "frmCadProdutos";
            this.Text = "CADASTRO DE PRODUTOS";
            ((System.ComponentModel.ISupportInitialize)(this.pctSelecaoPag)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.Button btnCadPessoa;
        private System.Windows.Forms.Button btnConsultar;
        private System.Windows.Forms.Button btnCadProduto;
        private System.Windows.Forms.PictureBox pctSelecaoPag;
    }
}