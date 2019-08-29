package etec.com.br;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    //Declarando as variáveis
    EditText n1, n2, n3;
    Button calcular;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        n1 = (EditText) findViewById(R.id.valor1);
        n2 = (EditText) findViewById(R.id.valor2);
        n3 = (EditText) findViewById(R.id.valor3);
        calcular = (Button) findViewById(R.id.btnCalcular);

        calcular.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if (n1.getText().toString().isEmpty()) {
                    n1.setError("Preencha o Valor 1");
                    n1.requestFocus();

                } else if (n2.getText().toString().isEmpty()) {
                    n2.setError("Preencha o valor 2");
                    n2.requestFocus();

                } else if (n3.getText().toString().isEmpty()) {
                    n3.setError("Preencha o valor 3 ");
                    n3.requestFocus();

                } else {


                    double v1, v2, v3, media;

                    v1 = Double.parseDouble(n1.getText().toString());
                    v2 = Double.parseDouble(n2.getText().toString());
                    v3 = Double.parseDouble(n3.getText().toString());

                    //Calculando á média das notas
                    media = (v1 + v2 + v3) / 3;
                    if(media < 5 ){
                        Toast.makeText(MainActivity.this,"Sua média é: " + media + "\n Reprovado! ", Toast.LENGTH_LONG).show();
                    }
                    else if (media == 5){
                        Toast.makeText(MainActivity.this,"Sua média é: " + media + "\n Recuperação! " , Toast.LENGTH_LONG).show();
                    }
                    else if(media > 5) {
                        Toast.makeText(MainActivity.this,"Sua média é: " + media + "\n Aprovado! " , Toast.LENGTH_LONG).show();
                    }




                }
            }
        });
    }
}


