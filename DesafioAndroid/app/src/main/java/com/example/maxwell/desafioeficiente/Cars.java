package com.example.maxwell.desafioeficiente;

/**
 * Created by Beisso on 14/09/2015.
 */
public class Cars {

    private String Model;
    private String Hp;
    private String Price, ConsumptionGas, ConsumptionEth, RevisionAVG, InsuranceAVG, Points;

    public Cars(){

    }


    public Cars(String Model, String Hp , String Price, String ConsumptionGas, String ConsumptionEth, String RevisionAVG, String InsuranceAVG, String Points ){
        this.Model = Model;
        this.Hp = Hp;
        this.Price = Price;
        this.ConsumptionGas = ConsumptionGas;
        this.ConsumptionEth = ConsumptionEth;
        this.RevisionAVG = RevisionAVG;
        this.InsuranceAVG = InsuranceAVG;
        this.Points = Points;
    }

    public String getModel() {
        return this.Model;
    }

    public String getHp() {
        return this.Hp;
    }

    public String getPrice() {
        return this.Price;
    }

    public String getConsumptionGas() {
        return this.ConsumptionGas;
    }

    public String getConsumptionEth() {
        return this.ConsumptionEth;
    }

    public String getRevisionAVG() {
        return this.RevisionAVG;
    }

    public String getInsuranceAVG() {
        return this.InsuranceAVG;
    }

    public String getPoints() {
        return this.Points;
    }

}
