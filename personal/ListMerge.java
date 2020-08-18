import java.util.ArrayList;

public class ListMerge {

    public static void main(String[] args) {
        ArrayList<String> original=new ArrayList<>();
        original.add("i");
        original.add("am");
        original.add("tommy");
        original.add("ma");
        ArrayList<String> add=new ArrayList<>();
        original.add("ned");
        original.add("medic");
        original.add("programming");
        original.add("med");
        ArrayList<String> remove=new ArrayList<>();
        remove.add("med");
        remove.add("i");
        original=merge(original,add,remove);
        for(int i=0;i<original.size();++i){
            System.out.println(original.get(i));
        }
    }

    public static ArrayList<String> merge(ArrayList<String> original, ArrayList<String> add, ArrayList<String> remove){

        //add elements from add list to original if needed
        for(int i=0;i<add.size();++i){
            boolean found=false;
            for(int j=0;j<original.size();++j){
                if(add.get(i).equalsIgnoreCase(original.get(j))) {
                    found=true;
                    break;
                }
            }
            if(!found){
                original.add(add.get(i));
            }
        }

        //remove element in remove from original
        for(int i=0;i<remove.size();++i){
            for(int j=0;j<original.size();++j){
                if(remove.get(i).equalsIgnoreCase(original.get(j))) {
                    original.remove(j);
                    break;
                }
            }
        }

        //sort
        for(int i=0;i<original.size();++i){
            for(int j=i+1;j<original.size();++j){
                if((original.get(j).length()>original.get(i).length())||(original.get(j).length()==original.get(i).length()&&original.get(j).compareToIgnoreCase(original.get(i))>0)){
                    String temp=original.get(i);
                    original.set(i,original.get(j));
                    original.set(j,temp);
                }
            }
        }

        return original;
    }
}